<?php

namespace Admingenerator\UserBundle\Twig\TokenParser;

use Symfony\Component\DependencyInjection\ContainerInterface;

class ExtendsMyConfiguredLayoutTokenParser extends \Twig\TokenParser\AbstractTokenParser    
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Parses a token and returns a node.
     *
     * @param \Twig\Token $token A \Twig\Token instance
     *
     * @return \Twig\NodeInterface A \Twig\NodeInterface instance
     */
    public function parse(\Twig\Token $token)
    {
        if (null !== $this->parser->getParent()) {
            throw new \Twig\Error\SyntaxError('Multiple extends tags are forbidden', $token->getLine());
        }

        $tpl = $this->container->getParameter($this->parser->getCurrentToken()->getValue());

        $this->parser->getExpressionParser()->parseExpression();

        $this->parser->setParent(new \Twig\Node\Expression\ConstantExpression($tpl,$token->getLine()));
        $this->parser->getStream()->expect(\Twig\Token::BLOCK_END_TYPE);

        return null;
    }

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag()
    {
        return 'extends_my_configured_layout';
    }
}
