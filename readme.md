# SpaceX Stats

This website was developed for fun to test out the Symfony Client, Serializer and Caching components. The data on this website is fetched using the [r-spacex API](https://github.com/r-spacex/SpaceX-API).

The project is [available publicly](https://spacex.joppe.dev).


### Running the project
You can run this project using the [Symfony Server](https://symfony.com/doc/current/setup/symfony_server.html).

```
symfony server:start
```

When using the [symfony proxy](https://symfony.com/doc/current/setup/symfony_server.html#local-domain-names), you can also attach a local domain.
```
symfony proxy:domain:attach spacexinfo.com
symfony server:start
```
This will make the project available on the domain `spacexinfo.com.wip`
### Resources Used

[SpaceX API](https://github.com/r-spacex/SpaceX-API)

[Symfony](https://symfony.com/)

[Creative Tim (Design)](https://www.creative-tim.com/)
