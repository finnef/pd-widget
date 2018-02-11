<?php

/**
 * This file is part of the pdAdmin pdWidget package.
 *
 * @package     pdWidget
 *
 * @author      Ramazan APAYDIN <iletisim@ramazanapaydin.com>
 * @copyright   Copyright (c) 2018 Ramazan APAYDIN
 * @license     LICENSE
 *
 * @link        https://github.com/rmznpydn/pd-widget
 */

namespace Pd\WidgetBundle\Builder;

/**
 * Widget Builder Interface.
 *
 * @author  Ramazan Apaydın <iletisim@ramazanapaydin.com>
 */
interface ItemInterface
{
    /**
     * Get Unique Item ID.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Get Item Name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set Item Name.
     *
     * @param string $name
     *
     * @return ItemInterface
     */
    public function setName(string $name);

    /**
     * Get Item Description.
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Set Item Description.
     *
     * @param string $description
     *
     * @return ItemInterface
     */
    public function setDescription(string $description);

    /**
     * Get Item Content.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Set Item Content.
     *
     * @param string $content
     *
     * @return ItemInterface
     */
    public function setContent(string $content);

    /**
     * Get Item Template.
     *
     * @return string
     */
    public function getTemplate(): string;

    /**
     * Set Item Template.
     *
     * @param string $template
     *
     * @return ItemInterface
     */
    public function setTemplate(string $template);

    /**
     * Get Content Data.
     *
     * @return mixed
     */
    public function getData();

    /**
     * Set Content Data.
     *
     * @param callable $data
     *
     * @return ItemInterface
     */
    public function setData(callable $data);

    /**
     * Get Order Number.
     *
     * @return int|null
     */
    public function getOrder();

    /**
     * Set Order Number.
     *
     * @param int $order
     *
     * @return ItemInterface
     */
    public function setOrder(int $order);

    /**
     * Get Access Role.
     *
     * @return array
     */
    public function getRole(): array;

    /**
     * Set Access Role.
     *
     * @param array $role
     *
     * @return ItemInterface
     */
    public function setRole(array $role);

    /**
     * Get Item Status.
     *
     * @return bool
     */
    public function isActive(): bool;

    /**
     * Set Item Status.
     *
     * @param bool $status
     *
     * @return ItemInterface
     */
    public function setActive(bool $status);

    /**
     * Get Item Group.
     *
     * @return string
     */
    public function getGroup(): string;

    /**
     * Set Item Group Name.
     *
     * @param string $name
     *
     * @return ItemInterface
     */
    public function setGroup(string $name);
}