FROM node:14.9.0 as build

WORKDIR /var/www/frontend

COPY package.json /var/www/frontend/

RUN npm install


COPY . /var/www/frontend

# Isto é o que faz o reload funcionar, por que você está iniciando o projeto react da mesma forma que seria feito de forma local

RUN npm run build
CMD npm start


