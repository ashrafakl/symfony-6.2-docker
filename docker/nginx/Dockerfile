FROM nginx:1.23.1-alpine

# Copy the nginx config file
COPY ./docker/nginx/app.conf /etc/nginx/conf.d/default.conf
COPY ./docker/nginx/local.pem /etc/ssl/certs/local.pem
COPY ./docker/nginx/local.key /etc/ssl/private/local.key
