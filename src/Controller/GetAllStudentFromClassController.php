<?php

namespace App\Controller;

use App\Resolver\GetAllStudentsFromClassInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class GetAllStudentFromClassController extends AbstractController
{
    private GetAllStudentsFromClassInterface $allStudentsFromClass;

    private SerializerInterface $serializer;

    public function __construct(GetAllStudentsFromClassInterface $allStudentsFromClass, SerializerInterface $serializer)
    {
        $this->allStudentsFromClass = $allStudentsFromClass;
        $this->serializer = $serializer;
    }

    #[Route('/getallstudentfromclass/{name}', name: 'app_get_all_student_from_class')]
    public function index(string $name): Response
    {
        $students = $this->allStudentsFromClass->getAllStudensFromClass($name);
        $jsonResponse = $this->serializer->serialize($students, 'json');

        return new JsonResponse($jsonResponse);
    }
}
