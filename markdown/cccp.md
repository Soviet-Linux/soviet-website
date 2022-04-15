We'll be utilizing the [CCCP](https://github.com/Soviet-Linux/CCCP) package manager (CCCP Crafter of Controlled Packages), which may use either installer binaries produced with the —create argument or sources from a .spm (soviet package manager) file. 

this is a example for a .spm package 
```
{
    "name" : "<package name>",
    "type" : "<src,bin,local>",
    "version" : "<version>",
    "dependencies" : ["<a dependencie>","<other dependencie>"],
    "info" : 
    {
        "download" : "<download command>",
        "build" : "<build command>",
        "archive" : "<archive location>"
    }, 
    "install" : 
    [
        {
            "file" : "<a file in the build dir>" ,
            "destination" : "<where the file should be installed>" 
        },
        {
            "file" : "<antoher file in the build dir>" ,
            "destination" : "<where the file should be installed>"
        }
    ]
```
