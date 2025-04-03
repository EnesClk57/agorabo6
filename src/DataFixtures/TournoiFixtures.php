<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Tournoi;
use App\Entity\CatTournois;
use App\Entity\Participant; // Ensure the Participant entity is imported

class TournoiFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tbDataTournois = [
            [
                'cattournoi' => 'retrogaming',
                'tournois' => [
                    ['libelle' => 'Retrogame 2024', 'date' => new \DateTime("2024-08-14 10:00:00"), 'date_creation' => new \DateTime("2024-05-01 22:31:10"), 'categorie_id' => 1, 'nb_participants' => 64, 'participants' => [
                            ['prenom' => 'Alice', 'nom' => 'Smith', 'telephone' => '1234567890', 'email' => 'alice@example.com'],
                            ['prenom' => 'Bob', 'nom' => 'Jones', 'telephone' => '0987654321', 'email' => 'bob@example.com'],
                        ],
                    ],
                    ['libelle' => 'Retrogame 2023', 'date' => new \DateTime("2023-06-30 10:00:00"), 'date_creation' => new \DateTime("2023-04-10 12:42:10"), 'categorie_id' => 1, 'nb_participants' => 34, 'participants' => [
                            ['prenom' => 'Charlie', 'nom' => 'Brown', 'telephone' => '1234567890', 'email' => 'charlie@example.com'],
                            ['prenom' => 'David', 'nom' => 'White', 'telephone' => '0987654321', 'email' => 'david@example.com'],
                        ],
                    ],
                ],
            ],
            [
                'cattournoi' => 'e-sport',
                'tournois' => [
                    ['libelle' => 'Tournois e-sport 2024', 'date' => new \DateTime("2024-10-14 10:00:00"), 'date_creation' => new \DateTime("2024-05-01 22:52:10"), 'categorie_id' => 2, 'nb_participants' => 64, 'participants' => [
                            ['prenom' => 'Eve', 'nom' => 'Black', 'telephone' => '1234567890', 'email' => 'eve@example.com'],
                            ['prenom' => 'Frank', 'nom' => 'Green', 'telephone' => '0987654321', 'email' => 'frank@example.com'],
                        ],
                    ],
                    ['libelle' => 'Tournois e-sport 2023', 'date' => new \DateTime("2023-08-22 10:00:00"), 'date_creation' => new \DateTime("2023-05-01 12:32:10"), 'categorie_id' => 2, 'nb_participants' => 32, 'participants' => [
                            ['prenom' => 'Grace', 'nom' => 'Adams', 'telephone' => '1234567890', 'email' => 'grace@example.com'],
                            ['prenom' => 'Henry', 'nom' => 'Brown', 'telephone' => '0987654321', 'email' => 'henry@example.com'],
                        ],
                    ],
                    ['libelle' => 'Tournois e-sport 2022', 'date' => new \DateTime("2022-07-30 10:00:00"), 'date_creation' => new \DateTime("2022-05-12 14:22:10"), 'categorie_id' => 2, 'nb_participants' => 32, 'participants' => [
                            ['prenom' => 'Ivy', 'nom' => 'Clark', 'telephone' => '1234567890', 'email' => 'ivy@example.com'],
                            ['prenom' => 'Jack', 'nom' => 'Davis', 'telephone' => '0987654321', 'email' => 'jack@example.com'],
                        ],
                    ],
                ],
            ],
        ];

        for ($i = 0; $i < count($tbDataTournois); ++$i) {
            // Créer une catégorie de tournois
            $categorie = new CatTournois();
            $categorie->setLibelle($tbDataTournois[$i]['cattournoi']);
            $manager->persist($categorie);

            // Créer les tournois de la catégorie
            foreach ($tbDataTournois[$i]['tournois'] as $unTournoi) {
                $tournoi = new Tournoi();
                $tournoi->setLibelle($unTournoi['libelle']);
                $tournoi->setDate($unTournoi['date']);
                $tournoi->setDateCreation($unTournoi['date_creation']);
                $tournoi->setNbParticipants($unTournoi['nb_participants']);
                
                // Associer le tournoi à la catégorie
                $tournoi->setCategorie($categorie);
                $manager->persist($tournoi);
                
                // Parcours chacun des participants
                for ($j = 0; $j < count($unTournoi['participants']); ++$j) {
                    $participantData = $unTournoi['participants'][$j];
                    $participant = new Participant();
                    $participant->setPrenom($participantData['prenom']);
                    $participant->setNom($participantData['nom']);
                    $participant->setTelephone($participantData['telephone']);
                    $participant->setEmail($participantData['email']);
                    
                    // Mettre en relation le participant avec le tournoi
                    $participant->addTournoi($tournoi);
                    $manager->persist($participant);
                }
            }
        }

        // Exécuter les mises à jour de la base de données
        $manager->flush();
    }
}
