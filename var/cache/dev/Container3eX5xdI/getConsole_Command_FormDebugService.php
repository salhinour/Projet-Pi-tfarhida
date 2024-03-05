<?php

namespace Container3eX5xdI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'VictorPrdh\\RecaptchaBundle\\Form'], [0 => 'App\\Form\\Activitee1Type', 1 => 'App\\Form\\ActiviteeType', 2 => 'App\\Form\\CategorieType', 3 => 'App\\Form\\ChangePasswordFormType', 4 => 'App\\Form\\PlatType', 5 => 'App\\Form\\Reclamation1Type', 6 => 'App\\Form\\ReclamationType', 7 => 'App\\Form\\RegistrationFormType', 8 => 'App\\Form\\Reponse1Type', 9 => 'App\\Form\\ReponseType', 10 => 'App\\Form\\ResetPasswordRequestFormType', 11 => 'App\\Form\\RestaurantType', 12 => 'App\\Form\\UpdatePasswordType', 13 => 'App\\Form\\UserAddType', 14 => 'App\\Form\\UserEditType', 15 => 'App\\Form\\UserType', 16 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 17 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 18 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 19 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 20 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 21 => 'VictorPrdh\\RecaptchaBundle\\Form\\ReCaptchaType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}