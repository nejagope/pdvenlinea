<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FabricanteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('direccion',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('telefono',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('contacto',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('status',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('createdat',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('updatedat',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Fabricante'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'multinet_pdvenlinea_pdvenlineabundle_fabricante';
    }
}
