<?php

namespace App\Form;

use App\Entity\Agenda;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AgendaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
	{
		for($i=0;$i<16;$i++) $amax[]=$i;
		$amax["Et plus ..."]="Et plus ...";
		$amin["Moins d'1 an"]=-1;
		$amin["En famille"]=127;
		$amin["Pour les parents"]=-128;
		for($i=0;$i<16;$i++) $amin[]=$i;
      	$builder
            ->add('titre')
            ->add('resume',TextareaType::class)
            ->add('description')
			->add('video')
			->add('map', TextType::class, ['label' => 'Google Map'])
			->add('lieu')
            ->add('adresse')
            ->add('horaires')
            ->add('telephone')
            ->add('email')
            ->add('url')
            ->add('age_min',ChoiceType::class, ['choices'=>$amin],["label"=>"A partir de"])
            ->add('age_max',ChoiceType::class, ['choices'=>$amax])
            ->add('type_resa',ChoiceType::class, ["choices" => ["Téléphone"=>0, "Email"=>1]])
            ->add('reservation')
            ->add('lat', TextType::class, ["label" => "Latitude"])
			->add('lng' ,TextType::class,  ["label"=> "Longitude"] )
			->add('dates')
			->add("save",SubmitType::class, ['label' => "Créer l'agenda"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
		$resolver->setDefaults([
			'data_class' => Agenda::class,
            // Configure your form options here
        ]);
    }
}
