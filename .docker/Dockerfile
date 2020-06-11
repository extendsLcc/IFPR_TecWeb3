FROM hitalos/laravel:latest
LABEL maintainer="extendsLcc <lucas.lcc@hotmail.com>"

RUN pecl install xdebug; \
	    echo \
        "[xdebug]\n"\
        "xdebug.idekey=XDEBUG\n"\
        "xdebug.remote_autostart=1\n"\
        "xdebug.remote_connect_back=1\n"\
        "xdebug.remote_enable=1\n"\
        "xdebug.remote_log=1\n"\
        "zend_extension=$(find /usr/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini
