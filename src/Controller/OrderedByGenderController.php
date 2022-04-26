<?php

namespace App\Controller;

use App\Resolver\OrderByGenderResolverInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class OrderedByGenderController extends AbstractController
{
    private OrderByGenderResolverInterface $orderByGenderResolver;

    private SerializerInterface $serializer;

    public function __construct(OrderByGenderResolverInterface $orderByGenderResolver, SerializerInterface $serializer)
    {
        $this->orderByGenderResolver = $orderByGenderResolver;
        $this->serializer = $serializer;
    }

    #[Route('/orderbygender/{name}', name: 'app_ordered_by_gender')]
    public function index(string $name): Response
    {
        $students = $this->orderByGenderResolver->getStudentsOrderByGender($name);
        $jsonResponse = $this->serializer->serialize($students, 'json');

        return new JsonResponse($jsonResponse);
    }
}
