<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProdutoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo', 'text', ['attr' => ['placeholder' => 'SKU', 'required' => true]])
            ->add('nome', 'text', ['attr' => ['placeholder' => 'Nome', 'required' => true]])
            ->add('precoUnitario', 'money', ['currency' => 'BRL', 'attr' => ['placeholder' => 'Valor Unitário', 'required' => true]])
            ->add('descricao', 'text', ['attr' => ['placeholder' => 'Descrição']])
            ->add('inserir_produto', 'submit', ['label' => 'Salvar']);
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Produto'
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'form_produto';
    }
}