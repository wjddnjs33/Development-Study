FROM node:latest
COPY . /app
WORKDIR /app

ENV PORT 27893

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y gstreamer1.0-libav libnss3-tools libatk-bridge2.0-0 libcups2-dev libxkbcommon-x11-0 libxcomposite-dev libxrandr2 libgbm-dev libgtk-3-0

RUN npm install express playwright fs request ejs --save

RUN chmod u+r+x /app/entrypoint.sh
ENTRYPOINT /app/entrypoint.sh

EXPOSE 27893
