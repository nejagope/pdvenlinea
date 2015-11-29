<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombrecliente',null,array(
                'label' => '',
                'attr'  => array(
                    'form-control'
                )
            ))
            ->add('nitcliente',null,array(
                'label' => '',
                'attr'  => array(
                    'form-control'
                )
            ))
            ->add('direccioncliente',null,array(
                'label' => '',
                'attr'  => array(
                    'form-control'
                )
            ))
            ->add('mailcliente',null,array(
                'label' => '',
                'attr'  => array(
                    'form-control'
                )
            ))
            ->add('status',null,array(
                'label' => '',
                'attr'  => array(
                    'form-control'
                )
            ))
            ->add('createdat',null,array(
                'label' => '',
                'attr'  => array(
                    'form-control'
                )
            ))
            ->add('updatedat',null,array(
                'label' => '',
                'attr'  => array(
                    'form-control'
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
            'data_class' => 'Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'multinet_pdvenlinea_pdvenlineabundle_cliente';
    }
}
