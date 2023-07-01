FROM ubuntu:23.04 as tailwindcss_admin_2

WORKDIR /var/src

RUN apt-get -y update
RUN apt-get -y install curl

RUN curl -sLO https://github.com/tailwindlabs/tailwindcss/releases/latest/download/tailwindcss-linux-x64
RUN chmod +x tailwindcss-linux-x64
RUN mv tailwindcss-linux-x64 tailwindcss

CMD /var/src/tailwindcss \
-i /var/src/assets/css/tailwind.css \
-c /var/src/tailwind.config.js \
-o /var/generated/admin/tailwind.output.css \
--watch
