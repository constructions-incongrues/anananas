var modulesPaths = [];
var propertiesPaths = [];

// Generate paths for mandatory modules
var modules = attributes.get('mandatory').split(',');
for (var i = 0; i < modules.length; i++) {
    modulesPaths.push('vendor/constructions-incongrues/ananas-build-toolkit/modules/' + modules[i] + '/module.xml');
    propertiesPaths.push('vendor/constructions-incongrues/ananas-build-toolkit/modules/' + modules[i] + '/module.properties');
}

// Generate paths for configuration profile enabled modules
var modules = attributes.get('profile').split(',');
for (var i = 0; i < modules.length; i++) {
    modulesPaths.push('vendor/constructions-incongrues/ananas-build-toolkit/modules/' + modules[i] + '/module.xml');
    propertiesPaths.push('vendor/constructions-incongrues/ananas-build-toolkit/modules/' + modules[i] + '/module.properties');
}

// Generate paths for external modules
var modules = attributes.get('external').split(',');
if (modules.length > 1) {
    for (var i = 0; i < modules.length; i++) {
        modulesPaths.push(modules[i] + '/module.xml');
        propertiesPaths.push(modules[i] + '/module.properties');
    }
}

modulesPaths = modulesPaths.join(',');

project.setNewProperty('toolkit.modules.paths', modulesPaths);
project.setNewProperty('toolkit.modules.paths.properties', propertiesPaths);

