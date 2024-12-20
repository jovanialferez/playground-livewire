FROM dunglas/frankenphp:php8.3

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update && apt-get install -y nodejs git
		
RUN install-php-extensions zip intl pdo_pgsql xdebug

RUN mkdir -p /var/www/.npm && chown -R www-data:www-data /var/www/.npm

COPY .devcontainer/post-create-command.sh /post-create-command.sh
RUN chmod +x /post-create-command.sh

COPY .devcontainer/post-start-command.sh /post-start-command.sh
RUN chmod +x /post-start-command.sh

RUN git config --global --add safe.directory /var/www

RUN git config --global push.autoSetupRemote true

RUN git config --global pull.rebase true

ARG USER=www-data

RUN \
	# Use "adduser -D ${USER}" for alpine based distros
	useradd -D ${USER}; \
	# Add additional capability to bind to port 80 and 443
	setcap CAP_NET_BIND_SERVICE=+eip /usr/local/bin/frankenphp; \
	# Give write access to /data/caddy and /config/caddy
	chown -R ${USER}:${USER} /data/caddy && chown -R ${USER}:${USER} /config/caddy;

USER ${USER}
