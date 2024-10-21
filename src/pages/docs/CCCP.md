---
layout: ../../layouts/Docs.astro
---
# CCCP package manager
The CCCP Crafter of Controlled Packages (CCCP) is apackage manager that has been designed and implemented from scratch in C.
CCCP is managed by the Soviet-Linux team and developed at https://github.com/Soviet-Linux/CCCP.

it uses the filesystem tree as its database to store package metadata and recipes

## Examples

1. **Installing a package**:
   ```bash
   cccp --install <my_package>
   ```

2. **Removing a package**:
   ```bash
   cccp --remove <my_package>
   ```

3. **Searching for a package**:
   ```bash
   cccp --search <package_name>
   ```

4. **Updating the repos**:
   ```bash
   cccp --update
   ```

5. **Upgrading all packages**:
   ```bash
   cccp --upgrade
   ```

6. **Installing from a local file**:
   ```bash
   cccp --package /path/to/package.ecmp
   ```

## Usage

The basic usage of CCCP is as follows:

```bash
cccp [options/package]
```

Options are evaluated from left to right, meaning the order in which you pass them matters.

## Command Options

Here is a detailed breakdown of the options available in CCCP:

### General Commands

- **`-v, --version`**
  Displays the current version of CCCP.

  ```bash
  cccp --version
  ```

- **`-h, --help`**
  Displays this help message, showing the list of available commands and options.

  ```bash
  cccp --help
  ```

### Package Management

- **`-i, --install <package>`**
  Installs the specified package from the custom repository.

  ```bash
  cccp --install <package_name>
  ```

- **`--no-checksum`**
  Bypasses checksum verification during package installation.

  ```bash
  cccp --install <package_name> --no-checksum
  ```

- **`-r, --remove <package>`**
  Removes the specified package from the system.

  ```bash
  cccp --remove <package_name>
  ```

- **`-l, --list`**
  Lists all the installed packages on the system.

  ```bash
  cccp --list
  ```

- **`-s, --search <package>`**
  Searches for packages in the repository that match the specified name.

  ```bash
  cccp --search <package_name>
  ```

### Package Updates

- **`--update`**
  Checks if there are updates available for any installed packages.

  ```bash
  cccp --update
  ```

- **`--upgrade`**
  Upgrades all outdated packages to their latest versions.

  ```bash
  cccp --upgrade
  ```

### Advanced Options

- **`-pkg, --package <path/to/package.ecmp>`**
  Installs a package from a local file. Use this option when you have a package in `.ecmp` format.

  ```bash
  cccp --package /path/to/package.ecmp
  ```

- **`-ow, --overwrite`**
  Overwrites existing installed packages when installing a new version.

  ```bash
  cccp --install <package_name> --overwrite
  ```

- **`-dbg, --debug <level 0-4>`**
  Prints debug information for troubleshooting purposes. The debug level ranges from 0 (minimal) to 4 (verbose).

  ```bash
  cccp --debug 3
  ```

- **`--clean`**
  Cleans up the cache directory, freeing up space by removing temporary files.

  ```bash
  cccp --clean
  ```

- **`--verbose`**
  Switches to verbose output, providing detailed information during the execution of the command.

  ```bash
  cccp --verbose
  ```

### Prompt Responses

- **`-Yy, -Nn`**
  Automatically responds with "Yes" or "No" to prompts during installation or removal of packages.

  - Use `-Yy` to automatically answer "Yes".
  - Use `-Nn` to automatically answer "No".

  ```bash
  cccp --install <package_name> -Yy
  ```
