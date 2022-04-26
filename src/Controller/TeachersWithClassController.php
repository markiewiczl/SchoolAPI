<?php

namespace App\Controller;

use App\Resolver\GetAllTeachersResolverInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class TeachersWithClassController extends AbstractController
{
    private GetAllTeachersResolverInterface $getAllTeachersResolver;

    private SerializerInterface $serializer;

    public function __construct(GetAllTeachersResolverInterface $getAllTeachersResolver, SerializerInterface $serializer)
    {
        $this->getAllTeachersResolver = $getAllTeachersResolver;
        $this->serializer = $serializer;
    }


    #[Route('/teacherswithclass', name: 'app_teachers_with_class')]
    public function index(): Response
    {
        $teachers = $this->getAllTeachersResolver->getAllTeacherClassNames();
        $jsonResponse = $this->serializer->serialize($teachers, 'json');

        return new JsonResponse($jsonResponse);
    }
}
