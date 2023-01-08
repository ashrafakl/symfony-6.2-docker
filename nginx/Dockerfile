FROM nginx:1.23.1-alpine

# Copy the nginx config file
COPY ./nginx/app.conf /etc/nginx/conf.d/default.conf
COPY ./nginx/local.pem /etc/ssl/certs/local.pem
COPY ./nginx/local.key /etc/ssl/private/local.key
