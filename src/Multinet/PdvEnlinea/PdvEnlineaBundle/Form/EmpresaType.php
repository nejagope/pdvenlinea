<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpresaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nitempresa',null,array(
                'label' => 'NIT Empresa',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('nombreempresa',null,array(
                'label' => 'Nombre Empresa',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('direccionempresa',null,array(
                'label' => 'Direccion Empresa',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('mailempresa',null,array(
                'label' => 'Mail Contacto',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('contactoempresa',null,array(
                'label' => 'Contacto Empresa',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('telefonoempresa',null,array(
                'label' => 'Telefono Empresa',
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
            ->add('nombreCertificado',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('estadoSucursal',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('idTipoEmpresa',null,array(
                'label' => '',
                'attr'  => array(
                    'class' => 'form-control'
                )
            ))
            ->add('idSucursal',null,array(
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
            'data_class' => 'Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\Empresa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'multinet_pdvenlinea_pdvenlineabundle_empresa';
    }
}
