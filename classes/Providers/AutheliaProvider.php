<?php
namespace Grav\Plugin\Login\OAuth2\Providers;

class AutheliaProvider extends ExtraProvider
{
    protected $name = 'Authelia';
    protected $classname = 'Riskio\\OAuth2\\Client\\Provider\\Auth0';

    public function initProvider(array $options) : void
    {
        $options += [
            'clientId'      => $this->config->get('providers.authelia.client_id'),
            'clientSecret'  => $this->config->get('providers.authelia.client_secret'),
            'customDomain'  => $this->config->get('providers.authelia.domain')
        ];

        parent::initProvider($options);
    }

    public function getAuthorizationUrl()
    {
        $options = ['state' => $this->state];
        $options['scope'] = $this->config->get('providers.authelia.options.scope');

        return $this->provider->getAuthorizationUrl($options);
    }

    public function getUserData($user)
    {
        $data_user = [
            'id'         => $user->getId(),
            'login'      => $user->getPreferredUsername(),
            'fullname'   => $user->getName(),
            'email'      => $user->getEmail(),
        ];

        return $data_user;
    }
}
