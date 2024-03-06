<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\UserRepository;
use App\Service\SendMailerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;


//#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
    ) {
    }

    /**
     * Display & process form to request a password reset.
     */
    // #[Route('', name: 'app_forgot_password_request')]
    // public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    // {
    //     $form = $this->createForm(ResetPasswordRequestFormType::class);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         return $this->processSendingPasswordResetEmail(
    //             $form->get('email')->getData(),
    //             $mailer,
    //             $translator
    //         );
    //     }

    //     return $this->render('reset_password/request.html.twig', [
    //         'requestForm' => $form->createView(),
    //     ]);
    // }

    /**
     * Confirmation page after a user has requested a password reset.
     */
    // #[Route('/check-email', name: 'app_check_email')]
    // public function checkEmail(): Response
    // {
    //     // Generate a fake token if the user does not exist or someone hit this page directly.
    //     // This prevents exposing whether or not a user was found with the given email address or not
    //     if (null === ($resetToken = $this->getTokenObjectFromSession())) {
    //         $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
    //     }

    //     return $this->render('reset_password/check_email.html.twig', [
    //         'resetToken' => $resetToken,
    //     ]);
    // }

    // /**
    //  * Validates and process the reset URL that the user clicked in their email.
    //  */
    // #[Route('/reset/{token}', name: 'app_reset_password')]
    // public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, string $token = null): Response
    // {
    //     if ($token) {
    //         // We store the token in session and remove it from the URL, to avoid the URL being
    //         // loaded in a browser and potentially leaking the token to 3rd party JavaScript.
    //         $this->storeTokenInSession($token);

    //         return $this->redirectToRoute('app_reset_password');
    //     }

    //     $token = $this->getTokenFromSession();
    //     if (null === $token) {
    //         throw $this->createNotFoundException('No reset password token found in the URL or in the session.');
    //     }

    //     try {
    //         $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
    //     } catch (ResetPasswordExceptionInterface $e) {
    //         $this->addFlash('reset_password_error', sprintf(
    //             '%s - %s',
    //             $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
    //             $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
    //         ));

    //         return $this->redirectToRoute('app_forgot_password_request');
    //     }

    //     // The token is valid; allow the user to change their password.
    //     $form = $this->createForm(ChangePasswordFormType::class);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         // A password reset token should be used only once, remove it.
    //         $this->resetPasswordHelper->removeResetRequest($token);

    //         // Encode(hash) the plain password, and set it.
    //         $encodedPassword = $passwordHasher->hashPassword(
    //             $user,
    //             $form->get('plainPassword')->getData()
    //         );

    //         $user->setPassword($encodedPassword);
    //         $this->entityManager->flush();

    //         // The session is cleaned up after the password has been changed.
    //         $this->cleanSessionAfterReset();

    //         return $this->redirectToRoute('app_home');
    //     }

    //     return $this->render('reset_password/reset.html.twig', [
    //         'resetForm' => $form->createView(),
    //     ]);
    // }

    // private function processSendingPasswordResetEmail(string $emailFormData, MailerInterface $mailer, TranslatorInterface $translator): RedirectResponse
    // {
    //     $user = $this->entityManager->getRepository(User::class)->findOneBy([
    //         'email' => $emailFormData,
    //     ]);

    //     // Do not reveal whether a user account was found or not.
    //     if (!$user) {
    //         return $this->redirectToRoute('app_check_email');
    //     }

    //     try {
    //         $resetToken = $this->resetPasswordHelper->generateResetToken($user);
    //     } catch (ResetPasswordExceptionInterface $e) {
    //         // If you want to tell the user why a reset email was not sent, uncomment
    //         // the lines below and change the redirect to 'app_forgot_password_request'.
    //         // Caution: This may reveal if a user is registered or not.
    //         //
    //         // $this->addFlash('reset_password_error', sprintf(
    //         //     '%s - %s',
    //         //     $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_HANDLE, [], 'ResetPasswordBundle'),
    //         //     $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
    //         // ));

    //         return $this->redirectToRoute('app_check_email');
    //     }

    //     $email = (new TemplatedEmail())
    //         ->from(new Address('roudainagmati11@gmail.com', 'tfarhida'))
    //         ->to($user->getEmail())
    //         ->subject('Your password reset request')
    //         ->htmlTemplate('reset_password/email.html.twig')
    //         ->context([
    //             'resetToken' => $resetToken,
    //         ])
    //     ;

    //     $mailer->send($email);

    //     // Store the token object in session for retrieval in check-email route.
    //     $this->setTokenObjectInSession($resetToken);

    //     return $this->redirectToRoute('app_check_email');
    // }

    
    #[Route("/forgot-password", name:"forgot_password")]
    public function showForgotPasswordForm(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, TokenGeneratorInterface $tokenGenerator, SendMailerService $mail): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $userRepository->findOneByEmail([$form->get('email')->getData()]);

            if ($user) {
                $token = $tokenGenerator->generateToken();
                $user->setResetToken($token);
                $entityManager->persist($user);
                $entityManager->flush();
                $url = $this->generateUrl(
                    'reset_password',
                    ['token' => $token],
                    UrlGeneratorInterface::ABSOLUTE_URL
                );

                $context = compact('url', 'user');

                $mail->send(
                    'stambouli1997@gmail.com',
                    $user->getEmail(),
                    'Reset your password',
                    'password_reset',
                    $context
                );
                $this->addFlash('success', "Check Your Mail Please");
                return $this->redirectToRoute('login');
            }
            $this->addFlash('danger', "User Not Found");
            return $this->redirectToRoute('login');
        }
        return $this->render('security/forgot_password.html.twig', [
            'requestPassForm' => $form->createView()
        ]);
    }

    
    //#[Route('/reset/{token}', name: 'app_reset_password')]
    /**
     * @Route("/reset-password/{token}", name="reset_password")
     */
    public function resetPassword(
        string $token,
        Request $request,
        UserRepository $usersRepository,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $user = $usersRepository->findOneByResetToken($token);
        if ($user) {
            $form = $this->createForm(ResetPasswordFormType::class);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $user->setResetToken('');
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Mot de passe changé avec succès');
                return $this->redirectToRoute('login');
            }

            return $this->render('security/reset_password.html.twig', [
                'passForm' => $form->createView()
            ]);
        }
        $this->addFlash('danger', 'Jeton invalide');
        return $this->redirectToRoute('login');
    }


}
