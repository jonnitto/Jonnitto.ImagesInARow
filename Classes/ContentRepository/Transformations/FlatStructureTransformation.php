<?php

namespace Jonnitto\ImagesInARow\ContentRepository\Transformations;

use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Model\NodeData;
use Neos\ContentRepository\Migration\Transformations\AbstractTransformation;
use Neos\Neos\Controller\CreateContentContextTrait;

/**
 * Move content of collections to the container
 */
class FlatStructureTransformation extends AbstractTransformation
{
    use CreateContentContextTrait;

    /**
     * @param NodeData $node
     * @return boolean
     */
    public function isTransformable(NodeData $node)
    {
        $numberOfChildNodes = $node->getNumberOfChildNodes(
            'Neos.Neos:ContentCollection',
            $node->getWorkspace(),
            $node->getDimensions()
        );
        return $numberOfChildNodes > 0;
    }

    /**
     * @param NodeData $node
     * @return void
     */
    public function execute(NodeData $node)
    {
        $contentContext = $this->createContentContext('live', []);
        $containerNode = $contentContext->getNodeByIdentifier(
            $node->getIdentifier()
        );
        $contentCollections = $containerNode->getChildNodes(
            'Neos.Neos:ContentCollection'
        );

        foreach ($contentCollections as $contentCollection) {
            /** @var NodeInterface $contentCollection */
            if ($contentCollection->hasChildNodes()) {
                $this->moveChildNodes(
                    $contentCollection->getChildNodes(),
                    $containerNode
                );
                $contentCollection->remove();
            }
        }
    }

    /**
     * @param array $children
     * @param NodeInterface $container
     */
    protected function moveChildNodes(array $children, NodeInterface $container)
    {
        foreach ($children as $childNode) {
            if ($childNode instanceof NodeInterface) {
                /** @var NodeInterface $childNode */
                $childNode->moveInto($container);
            }
        }
    }
}
