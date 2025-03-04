<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Tournoi; 
use App\Entity\Categorie; 
use App\Entity\CatTournois;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry; 

class TournoisController extends AbstractController
{
    #[Route('/tournois', name: 'app_tournois')]
    public function index(): Response
    {
        return $this->render('tournois/index.html.twig', [
            'controller_name' => 'TournoisController','menuActif' => 'Jeux',

        ]);
    }
    #[Route('/tournoi/creer', name: 'app_tournoi_creer')] 
        public function creerTournoi(EntityManagerInterface $entityManager): Response    
        {         
            // : Response        type de retour de la méthode creerTournoi      
            // pour récupérer le EntityManager (manager d'entités, d'objets)
            //     on peut ajouter l'argument à la méthode comme ici  creerTournoi(EntityManagerInterface $entityManager)
            //     ou on peut récupérer le EntityManager comme dans la méthode suivante 
            // créer l'objet         
            $tournoi = new Tournoi();         
            $tournoi->setLibelle('tournoi retrogame 2024');
            $tournoi->setdate(new \DateTime("2024-07-30 00:00:00"));
            
            // dire à Doctrine que l'objet sera (éventuellement) persisté
            $entityManager->persist($tournoi);          
            
            // exécuter les requêtes (indiquées avec persist) ici il s'agit de l'ordre INSERT qui sera exécuté        
            $entityManager->flush();          
            
            return new Response('Nouveau tournoi enregistré, son id est : ' . $tournoi->getId()); 
            } 

     #[Route('/tournoi/{id}', name: 'app_tournoi_lire')]
        public function lire($id, ManagerRegistry $doctrine): Response
{
    $entityManager = $doctrine->getManager();
    $tournoi = $entityManager->getRepository(Tournoi::class)->find($id);

    if (!$tournoi) {
        throw $this->createNotFoundException('Ce tournoi n\'existe pas : ' . $id);
    }

    // Correctif du `return` en dehors du `if`
    return new Response('Voici le libellé du tournoi : ' . $tournoi->getLibelle());
}

            #[Route('/tournoi/modifier/{id}', name: 'app_tournoi_modifier')]
        public function modifier($id, EntityManagerInterface $entityManager)
        {
            // 1 recherche du tournoi
            $tournoi = $entityManager->getRepository(Tournoi::class)->find($id);

            // en cas de tournoi inexistant, affichage page 404
            if (!$tournoi) {
            throw $this->createNotFoundException(
            'Aucun tournoi avec l\'id ' . $id
        );
    }

    // 2 modification des propriétés
    $tournoi->setLibelle('tournoi RetroGaming millésime 2024');

    // 3 exécution de l'update
    $entityManager->flush();

    // redirection vers l'affichage du tournoi
    return $this->redirectToRoute('app_tournoi_lire', [
        'id' => $tournoi->getId()
    ]);
}
#[Route('/tournoi/supprimer/{id}', name: 'app_tournoi_supprimer')]     
public function supprimer($id, EntityManagerInterface $entityManager)    
 {         
    // 1  recherche du tournoi         
    
    $tournoi = $entityManager->getRepository(Tournoi::class)->find($id);          
    // en cas de tournoi inexistant, affichage page 404        
    
    if (!$tournoi) {             throw $this->createNotFoundException(
        'Aucun tournoi avec l\'id ' . $id             
    );         
}          

// 2 suppression du tournoi         
$entityManager->remove(($tournoi));         
// 3 exécution du delete         
$entityManager->flush();          
// affichage réponse         

return new Response('Le tournoi a été supprimé, id : ' . $id);     } 

#[Route('/tournois/{datemax}', name: 'app_tournois_lireTournois')]    
 public function lireTournois($datemax, EntityManagerInterface $entityManager)     
 {         
    $tournois = $entityManager             
    ->getRepository(Tournoi::class)             
    ->findAllAfterThanDate($datemax);          
    
    // OU        
    // $repository = $entityManager->getRepository(Tournoi::class);         
    // $tournois = $repository->findAllAfterThanDate($prix);          
    
    // OU         
    //  ajouter :                   use App\Repository\TournoiRepository;         
    // injecter le repository :      public function liretournois($prix, tournoisRepository $repository)         
    //  et écrire    :              
    //  $tournois = $repository->findAllAfterThanDate($date);          
    
    return new Response('Voici le nombre de tournois : ' . sizeof($tournois));     } 

    #[Route('/tournoi/complet/creer', name: 'app_tournoi_complet_creer')]     
    public function creerTournoiComplet(EntityManagerInterface $entityManager)    
     {         
        // créer une catégoriede tournoi        
         $categorie = new CatTournois();        
        $categorie->setLibelle('Tournois RetroGaming');         
        
        // créer un tournoi         
        $tournoi = new Tournoi();        
        $tournoi->setLibelle('Tournois e-sport 2024');         
        $tournoi->setdate(new \DateTime("2024-10-14 00:00:00"));         
        
        // mettre en relation le tournoi avec la catégorie         
        // 
        $tournoi->setCategorie($categorie);          
        // persister les objets         
        $entityManager->persist($categorie);         
        $entityManager->persist($tournoi);         
        
        // exécutez les requêtes         
        $entityManager->flush();         
        // retourner une réponse         
        return new Response(  
           'Nouveau tournoi enregistré avec l\'id : ' . $tournoi->getId()                 . ' et nouvelle catégorie de tournois enregistrée avec id: ' . $categorie->getId()         
        );    
     } 
}