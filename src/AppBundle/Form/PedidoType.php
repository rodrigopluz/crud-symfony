<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PedidoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cliente','entity',  [
                'class' => 'AppBundle:Pessoa',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p');
                }, 
                'choice_label' => 'getNome'
            ], 
            [
                'attr' => ['placeholder' => 'Selecione o cliente', 'required' => true]
            ])
            ->add('criar_pedido', 'submit', ['label' => 'Próximo']);
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Pedido'
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_pedido';
    }
}