FROM tutum/lamp

RUN rm -fr /app \
&& mkdir /app
COPY ./index.html /app/index.php
COPY ./index.png /app/index.png
COPY ./login.php /app/login.php

EXPOSE 80 3306
CMD ["/run.sh"]

