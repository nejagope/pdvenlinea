<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DetalleFacturaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control' 
                )
            ))
            ->add('subtotal',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control' 
                )
            ))
            ->add('createdAt',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control' 
                )
            ))
            ->add('updatedAt',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control' 
                )
            ))
            ->add('idfactura',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control' 
                )
            ))
            ->add('idproducto',null,array(
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
            'data_class' => 'Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\DetalleFactura'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'multinet_pdvenlinea_pdvenlineabundle_detallefactura';
    }
}
