<?php

namespace App\Form;

use App\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('student_number')
            ->add('name')
            ->add('course' , ChoiceType::class, [
                'choices'  => [
                    'Select' => null,
                    'Bachelor of Science in Mechanical Engineering (BSME)' => 'Bachelor of Science in Mechanical Engineering (BSME)',
                    'Bachelor of Science in Electronics Engineering (BSECE)' => 'Bachelor of Science in Electronics Engineering (BSECE)',
                    'Bachelor of Science in Information Technology (BSIT)' => 'Bachelor of Science in Information Technology (BSIT)',
                    'Bachelor of Science in Education - Major in English (BSED-ENG)' => 'Bachelor of Science in Education - Major in English (BSED-ENG)',
                    'Bachelor of Science in Education - Major in Math (BSED-Math)' => 'Bachelor of Science in Education - Major in Math (BSED-Math)',
                    'Bachelor of Science in Accountancy (BSA)' => 'Bachelor of Science in Accountancy (BSA)',
                    'Bachelor of Science in Office Administration (BSOA)' => 'Bachelor of Science in Office Administration (BSOA)',
                    'Bachelor of Science in Business Administration - Marketing Management (BSBA-MM)' => 'Bachelor of Science in Business Administration - Marketing Management (BSBA-MM)',
                    'Bachelor of Science in Business Administration - Human Resource Management (BSBA-HRM)' => 'Bachelor of Science in Business Administration - Human Resource Management (BSBA-HRM)',
                    'Diploma in Information and Communication Technology (DICT)' => 'Diploma in Information and Communication Technology (DICT)',
                    'Diploma in Office Management Technology (DOMT)' => 'Diploma in Office Management Technology (DOMT)'

                ]
            ])
            ->add('year_level'  , ChoiceType::class, [
                'choices'  => [
                    'Select' => null,
                    '1st Year' => '1st Year',
                    '2nd Year' => '2nd Year',
                    '3rd Year' => '3rd Year',
                    '4th Year' => '4th Year',
                    '5th Year' => '5th Year',
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
