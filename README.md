# Login OAuth2 Authelia Plugin

The **Login OAuth2 Authelia** Plugin is for [Grav CMS](http://github.com/getgrav/grav). This plugin provides authelia authenticatoin providers not included in the [Login OAuth2 Plugin](http://github.com/trilbymedia/grav-plugin-login-oauth2). 


**NOTE:** Please use the same **Callback URIs** and configuration from **Login OAuth2 Plugin**.

This repository is inspired from the [trilbymedia/grav-plugin-login-oauth2-extras](http://github.com/trilbymedia/grav-plugin-login-oauth2-extras) a pull request was opened against this repo.

## Installation

Installing the Login Login OAuth2 authelia plugin can be done with the manual method via a zip file : 
[Manual installation](http://learn.getgrav.org/17/plugins/plugin-install#manual-installation)

This will install the Login Login OAuth2 authelia plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/login-oauth2-authelia`.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/login-oauth2-authelia/login-oauth2-authelia.yaml` to `user/config/plugins/login-oauth2-authelia.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
built_in_css: true
providers:
  authelia:
    enabled: false
    client_id:
    client_secret:
    domain:
    options:
      scope: ['openid', 'email', 'profile']
  

admin:
  enabled: true
  built_in_css: true
  providers:
    authelia:
      enabled: false
      client_id:
      client_secret:
      domain:
      options:
        scope: ['openid', 'email', 'profile']
```

Note that if you use the admin plugin, a file with your configuration, and named login-oauth2-authelia.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.

### OAuth2 Provider

#### Authelia

|Key                   |Description                 | Values |
|:---------------------|:---------------------------|:-------|
| enabled | Enable or disable this specific provider. This stops its showing as an valid login option | `true` \| [default: `false`] |
| client_id | The **Client ID** Provided by Authelia when you register an application for OAuth2 authentication | `` |
| client_secret | The **Client Secret** Provided by Authelia when you register an application for OAuth2 authentication | `` |
| domain | The **Domain** Provided by Authelia when you register an application for OAuth2 authentication | `` |
| scope | An array of strings that define the OAuth2 scope. These can enable retrieving more data, but often require more permissions | default: `['openid', 'email', 'profile']` |
