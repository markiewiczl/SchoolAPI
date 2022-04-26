<?php

namespace App\DataFixtures;

use App\Entity\Group;
use App\Entity\Student;
use App\Entity\Teacher;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $group1 = new Group();
        $group1->setName('a');

        $group2 = new Group();
        $group2->setName('b');

        $group3 = new Group();
        $group3->setName('c');

        $group4 = new Group();
        $group4->setName('d');

        $group5 = new Group();
        $group5->setName('e');

        $group6 = new Group();
        $group6->setName('f');

        $teacher1 = new Teacher();
        $teacher1->setFullName('Zuzanna Nowak');
        $teacher1->setGroupClass($group1);

        $teacher2 = new Teacher();
        $teacher2->setFullName('Piotr Adamiak');
        $teacher2->setGroupClass($group2);

        $teacher3 = new Teacher();
        $teacher3->setFullName('Adam Nowy');
        $teacher3->setGroupClass($group3);

        $teacher4 = new Teacher();
        $teacher4->setFullName('Jan Otwarty');
        $teacher4->setGroupClass($group4);

        $teacher5 = new Teacher();
        $teacher5->setFullName('Paulina Baczek');
        $teacher5->setGroupClass($group5);

        $teacher6 = new Teacher();
        $teacher6->setFullName('Marcin Niski');
        $teacher6->setGroupClass($group6);

        $student1 = new Student();
        $student1->setName('Ania');
        $student1->setLastName('Nowak');
        $student1->setGender('female');
        $student1->setGroupClass($group1);
        $student1->setTeacher($teacher1);

        $student2 = new Student();
        $student2->setName('Kamil');
        $student2->setLastName('Ciesla');
        $student2->setGender('male');
        $student2->setGroupClass($group1);
        $student2->setTeacher($teacher1);

        $student3 = new Student();
        $student3->setName('Kinga');
        $student3->setLastName('Biala');
        $student3->setGender('female');
        $student3->setGroupClass($group2);
        $student3->setTeacher($teacher2);

        $student4 = new Student();
        $student4->setName('Hania');
        $student4->setLastName('Bowak');
        $student4->setGender('female');
        $student4->setGroupClass($group2);
        $student4->setTeacher($teacher2);

        $student5 = new Student();
        $student5->setName('Monika');
        $student5->setLastName('Zbok');
        $student5->setGender('female');
        $student5->setGroupClass($group3);
        $student5->setTeacher($teacher3);

        $student6 = new Student();
        $student6->setName('Artur');
        $student6->setLastName('Faktura');
        $student6->setGender('male');
        $student6->setGroupClass($group3);
        $student6->setTeacher($teacher3);
        $student13 = new Student();
        $student13->setName('Ania');
        $student13->setLastName('Faktura');
        $student13->setGender('female');
        $student13->setGroupClass($group3);
        $student13->setTeacher($teacher3);

        $student7 = new Student();
        $student7->setName('Bartosz');
        $student7->setLastName('Stary');
        $student7->setGender('male');
        $student7->setGroupClass($group4);
        $student7->setTeacher($teacher4);

        $student8 = new Student();
        $student8->setName('Klaudia');
        $student8->setLastName('Nowacka');
        $student8->setGender('female');
        $student8->setGroupClass($group4);
        $student8->setTeacher($teacher4);

        $student9 = new Student();
        $student9->setName('Zosia');
        $student9->setLastName('Biwak');
        $student9->setGender('female');
        $student9->setGroupClass($group5);
        $student9->setTeacher($teacher5);

        $student10 = new Student();
        $student10->setName('Michał');
        $student10->setLastName('Jurny');
        $student10->setGender('male');
        $student10->setGroupClass($group5);
        $student10->setTeacher($teacher5);

        $student11 = new Student();
        $student11->setName('Stanisław');
        $student11->setLastName('Zachalny');
        $student11->setGender('male');
        $student11->setGroupClass($group6);
        $student11->setTeacher($teacher6);

        $student12 = new Student();
        $student12->setName('Marek');
        $student12->setLastName('Zgon');
        $student12->setGender('male');
        $student12->setGroupClass($group6);
        $student12->setTeacher($teacher6);

        $manager->persist($group1);
        $manager->persist($group2);
        $manager->persist($group3);
        $manager->persist($group4);
        $manager->persist($group5);
        $manager->persist($group6);

        $manager->persist($teacher1);
        $manager->persist($teacher2);
        $manager->persist($teacher3);
        $manager->persist($teacher4);
        $manager->persist($teacher5);
        $manager->persist($teacher6);

        $manager->persist($student1);
        $manager->persist($student2);
        $manager->persist($student3);
        $manager->persist($student4);
        $manager->persist($student5);
        $manager->persist($student6);
        $manager->persist($student7);
        $manager->persist($student8);
        $manager->persist($student9);
        $manager->persist($student10);
        $manager->persist($student11);
        $manager->persist($student12);
        $manager->persist($student13);

        $manager->flush();
    }
}
