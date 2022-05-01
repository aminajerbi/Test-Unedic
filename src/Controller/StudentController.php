<?php

namespace App\Controller;

use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/", name="students")
     */
    public function index(StudentRepository $repository): Response
    {
        $students = $repository->findAll();
        return $this->render('student/students.html.twig', [
            'students' => $students,
        ]);
    }
}
