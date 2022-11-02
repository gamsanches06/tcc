FROM node:14.9.0 as build

WORKDIR /var/www/frontend

COPY package.json /var/www/frontend//
# COPY yarn.lock /var/www/frontend/ 
RUN npm install
# RUN yarn install

COPY . /var/www/frontend

# this what make hot reloading works
# because you are starting your project
# in the same way you running it locally
#RUN yarn run build
#CMD yarn start

RUN npm run build
CMD npm start


