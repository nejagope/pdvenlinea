<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoType extends AbstractType
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
            ->add('preciocosto',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('precioventa',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('fechavencimiento',null,array(
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
            ->add('status',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('stock',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('iddistribuidor',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('idcategoriaproducto',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('idEmpresa',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('idUnidadMedida',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('idTipoMoneda',null,array(
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
            'data_class' => 'Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Producto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'multinet_pdvenlinea_pdvenlineabundle_producto';
    }
}
