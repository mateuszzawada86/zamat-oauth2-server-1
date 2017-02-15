<?php

namespace Zamat\OAuth2\Manager;

use Zamat\OAuth2\Provider\ScopeProviderInterface;
interface ScopeManagerInterface
{
    
    /**
     * 
     * @param \Zamat\OAuth2\Manager\ScopeProviderInterface $scopeProvider
     */
    public function setScopeProvider(ScopeProviderInterface $scopeProvider);
    
    /**
     * 
     * @param ScopeProviderInterface $scopeProvider
     */
    public function __construct(ScopeProviderInterface $scopeProvider );   
    
    /**
     * Creates a new scope
     * @param string $scope
     * @param string $description
     * @return Scope
     */
    public function createScope($scope, $description = null);

    /**
     * Find a single scope by the scope
     *
     * @param $scope
     * @return Scope
     */
    public function findScopeByScope($scope);

    /**
     * Find all the scopes by an array of scopes
     *
     * @param array $scopes
     * @return mixed
     */
    public function findScopesByScopes(array $scopes);
    
}
