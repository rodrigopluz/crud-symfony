<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PessoaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', 'text', ['attr' => ['placeholder' => 'Nome', 'required' => true]])
            ->add('dataNascimento',  'date',  ['placeholder' => 'Data de nascimento', 'widget' => 'single_text', 'required' => true, 'format' => 'dd/MM/yyyy'])
            ->add('descricao', 'text', ['attr' => ['placeholder' => 'Descrição']])
            ->add('inserir_cliente', 'submit', ['label' => 'Salvar']);
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Pessoa'
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_pessoa';
    }
}