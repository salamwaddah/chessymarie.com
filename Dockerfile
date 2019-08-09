FROM node:10

WORKDIR /src

COPY . .

RUN yarn install \
    --prefer-offline \
    --frozen-lockfile \
    --non-interactive \
    --production=true

RUN yarn build

CMD ["yarn", "start"]
