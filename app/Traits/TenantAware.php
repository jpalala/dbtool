<?php

namespace App\Traits;

trait TenantAware
{
    /**
     * The tenants to be migrated.
     *
     * @var array|string
     */
    protected $tenants;

    /**
     * Initialize the tenants to be migrated.
     *
     * @param array|string $tenants
     * @return void
     */
    public function init($tenants = '*')
    {
        if (is_array($tenants) || $tenants === '*') {
            $this->tenants = $tenants;
        } else {
            throw new \InvalidArgumentException('Tenants parameter must be an array or a "*" string.');
        }
    }

    /**
     * Determine if the migration is for all tenants.
     *
     * @return bool
     */
    public function isForAllTenants()
    {
        return $this->tenants === '*';
    }

    /**
     * Get the tenants to be migrated.
     *
     * @return array|string
     */
    public function getTenants()
    {
        return $this->tenants;
    }
}

