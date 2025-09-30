<?php

namespace App\Repository;

use App\Entity\Restaurant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Restaurant>
 */
class RestaurantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Restaurant::class);
    }

    /**
     * Finds a restaurant by its ID.
     *
     * @param int $id The restaurant ID
     * @return Restaurant|null The restaurant or null if not found
     */
    public function findRestaurantById(int $id): ?Restaurant
    {
        return $this->find($id);
    }

    /**
     * Finds a restaurant by its name.
     *
     * @param string $name The restaurant name
     * @return Restaurant|null The restaurant or null if not found
     */
    public function findRestaurantByName(string $name): ?Restaurant
    {
        return $this->findOneBy(['name' => $name]);
    }
}
