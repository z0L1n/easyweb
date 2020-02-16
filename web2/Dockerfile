FROM tutum/lamp

RUN rm -fr /app \
&& mkdir /app
COPY ./index.php /app/index.php
COPY ./config.php /app/config.php


EXPOSE 80 3306
CMD ["/run.sh"]

