<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\UI\Responders\Interfaces;

use App\Domain\Models\Trick;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

interface TricksDetailsResponderInterface
{
    /**
     * TricksDetailsResponderInterface constructor.
     * @param Environment $templating
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(
        Environment $templating,
        UrlGeneratorInterface $urlGenerator
    );

    /**
     * @param $isRedirect
     * @param $trick
     * @param $comments
     * @param FormInterface|null $form
     * @return Response
     */
    public function response($isRedirect, Trick $trick, $comments = null, FormInterface $form = null): Response;
}
