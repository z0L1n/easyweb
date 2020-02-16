FROM tutum/lamp

RUN rm -fr /app \
&& mkdir /app
COPY ./index.html /app/index.php

EXPOSE 80 3306
CMD ["/run.sh"]

