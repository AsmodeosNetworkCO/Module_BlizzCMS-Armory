# Armory | Modulo para BlizzCMS!

Modulo de armeria para blizzCMS .


# Caracteristicas
- Visualiza los items que porta un personaje.
- Visualiza los miembros de una hermandad.
# Instalación
- Copia en tu carpeta de modulos la carpeta application/modules/armory
- Abre el archivo application/config/routes.php y agrega estas lineas al final:

```
/*armory*/
$route[$lang.'/armory/player/(:num)'] = 'armory/index/$2';
$route[$lang.'/armory'] = 'armory/search';
$route[$lang.'/armory/result'] = 'armory/result';
$route[$lang.'/armory/guild/(:num)'] = 'armory/guild/$2';
```

- Disfruta tu modulo
- para visualizarlo ingresa a `http://tudominio.tdl/armory`
# Live Demo
- [Zuldazar Realms Armory](https://zuldazar-realms.tk/armory "Zuldazar Realms")

# Capturas de Pantalla
[![Captura1](https://raw.githubusercontent.com/AsmodeosNetworkCO/Module_BlizzCMS-Armory/master/screenshots/screenshot-1.JPG "Captura1")]
[![Captura2](https://raw.githubusercontent.com/AsmodeosNetworkCO/Module_BlizzCMS-Armory/master/screenshots/screenshot-2.JPG "Captura2")]
[![Captura3](https://raw.githubusercontent.com/AsmodeosNetworkCO/Module_BlizzCMS-Armory/master/screenshots/screenshot-3.JPG "Captura3")]
[![Captura4](https://raw.githubusercontent.com/AsmodeosNetworkCO/Module_BlizzCMS-Armory/master/screenshots/screenshot-4.JPG "Captura4")]
[![Captura5](https://raw.githubusercontent.com/AsmodeosNetworkCO/Module_BlizzCMS-Armory/master/screenshots/screenshot-5.JPG "Captura5")]
[![Captura6](https://raw.githubusercontent.com/AsmodeosNetworkCO/Module_BlizzCMS-Armory/master/screenshots/screenshot-6.JPG "Captura6")]

# Agradecimientos
- [WoW CMS Developers](https://wow-cms.com "BlizzCMS")
- [WoW CMS Discord Members](https://discord.gg/vZG9vpS "WoW CMS Discord Members")
- [Asmodeos Network CO](https://www.asmodeosnetworkco.tk/ "Asmodeos Network CO")
- [Zuldazar Realms](https://zuldazar-realms.tk "Zuldazar Realms")
- [Sebasbrs (Desarrollador del Modulo)](https://github.com/sebasbrs "Sebasbrs (Desarrollador del Modulo)")

# Sponsor us
- [Patreon](https://patreon.com/zuldazarrealms "Patreon")
- [Ko-Fi](https://ko-fi.com/zuldazarrealms "Ko-Fi")
- [LiberaPay](https://liberapay.com/sebasbrs32 "LiberaPay")
- [Paypal](http://paypal.me/sebasgodoy1 "Paypal")
