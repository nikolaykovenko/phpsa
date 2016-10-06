<?php
/**
 * @author Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSA\Compiler\Statement;

use PHPSA\CompiledExpression;
use PHPSA\Context;

class SwitchSt extends AbstractCompiler
{
    protected $name = '\PhpParser\Node\Stmt\Switch_';

    /**
     * @param \PhpParser\Node\Stmt\Switch_ $stmt
     * @param Context $context
     * @return CompiledExpression
     */
    public function compile($stmt, Context $context)
    {
        $context->getExpressionCompiler()->compile($stmt->cond);

        if (count($stmt->cases) > 0) {
            foreach ($stmt->cases as $case) {
                \PHPSA\nodeVisitorFactory($case, $context);
            }
        } else {
            $context->notice('not-implemented-body', 'Missing body', $stmt);
        }
    }
}
