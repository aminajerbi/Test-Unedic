<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminAdminStudentController extends AbstractController
{
    /**
     * @Route("/admin/student", name="admin_student")
     */
    public function index(StudentRepository $repository): Response
    {
        $students = $repository->findAll();
        return $this->render('admin_admin_student/adminStudent.html.twig',[
            "students" => $students,
        ]);
    }

    /**
     * @Route("/admin/student/{id}", name="admin_student_modication")
     */
    public function modification(Student $student): Response
    {
        $form = $this->createForm(StudentType::class, $student);
        return $this->render('admin_admin_student/modificationStudent.html.twig',[
            "student" => $student,
            "form" => $form->createView(),
        ]);
    }
}
