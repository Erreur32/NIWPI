---
title: netdata
private: false
date: '15:22 06-04-2018'
creator: erreur32
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
---

# netdata 
[![Build Status](https://travis-ci.org/firehol/netdata.svg?branch=master)](https://travis-ci.org/firehol/netdata) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/a994873f30d045b9b4b83606c3eb3498)](https://www.codacy.com/app/netdata/netdata?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=firehol/netdata&amp;utm_campaign=Badge_Grade) [![Code Climate](https://codeclimate.com/github/firehol/netdata/badges/gpa.svg)](https://codeclimate.com/github/firehol/netdata) [![License: GPL v3+](https://img.shields.io/badge/License-GPL%20v3%2B-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
> *New to netdata? Here is a live demo: [http://my-netdata.io](http://my-netdata.io)*

[TOC]
**netdata** is a system for **distributed real-time performance and health monitoring**.
It provides **unparalleled insights, in real-time**, of everything happening on the
system it runs (including applications such as web and database servers), using
**modern interactive web dashboards**.

_netdata is **fast** and **efficient**, designed to permanently run on all systems
(**physical** & **virtual** servers, **containers**, **IoT** devices), without
disrupting their core function._

netdata runs on **Linux**, **FreeBSD**, and **MacOS**.

---
## Installation 

### Dependances

```bash
$  apt-get install zlib1g-dev uuid-dev libmnl-dev gcc make git autoconf autoconf-archive autogen automake pkg-config curl jq nodejs
```
![image10](https://cloud.githubusercontent.com/assets/2662304/14253729/534c6f9c-fa95-11e5-8243-93eb0df719aa.gif)


##  install netdata!


### Linux one liner

For all **Linux** systems, you can use this one liner to install the git version of netdata:

```sh
# basic netdata installation
$ bash <(curl -Ss https://my-netdata.io/kickstart.sh)

# install required packages for all netdata plugins
$ bash <(curl -Ss https://my-netdata.io/kickstart.sh) all
```

The above:

```sh
$ bash <(curl -Ss https://my-netdata.io/kickstart.sh) all --dont-wait --dont-start-it
```

### x86_64 pre-built binary for any Linux

You can install a pre-compiled static binary of netdata for any Intel/AMD 64bit Linux system (even those that don't have a package manager, like CoreOS, CirrOS, busybox systems, etc). You can also use these packages on systems with broken or unsupported package managers.

To install the latest version use this:

```sh
$ bash <(curl -Ss https://my-netdata.io/kickstart-static64.sh)
```

For automated installs, append a space + `--dont-wait` to the command line. You can also append `--dont-start-it` to prevent the installer from starting netdata. Example:

```sh
$ bash <(curl -Ss https://my-netdata.io/kickstart-static64.sh) --dont-wait --dont-start-it
```

If your shell fails to handle the above one liner, do this:

```sh
# download the script with curl
$ curl https://my-netdata.io/kickstart-static64.sh >/tmp/kickstart-static64.sh

# or, download the script with wget
$ wget -O /tmp/kickstart-static64.sh https://my-netdata.io/kickstart-static64.sh

# run the downloaded script (any sh is fine, no need for bash)
$ sh /tmp/kickstart-static64.sh
```

> **The static builds install netdata at `/opt/netdata`**.

The static binary files are kept in this repo: https://github.com/firehol/binary-packages

Download any of the `.run` files, and run it. These files are self-extracting shell scripts built with [makeself](https://github.com/megastep/makeself).

The target system does **not** need to have bash installed.

The same files can be used for updates too.

```bash 
$  cd /opt
$  git clone https://github.com/firehol/netdata.git netdata --depth=1
$  cd netdata
$  ./netdata-installer.sh
```

## Features

<p align="center">
<img src="https://cloud.githubusercontent.com/assets/2662304/19168687/f6a567be-8c19-11e6-8561-ce8d589e8346.gif"/>
</p>


![netdata](https://cloud.githubusercontent.com/assets/2662304/14092712/93b039ea-f551-11e5-822c-beadbf2b2a2e.gif)

---

## What does it monitor?

netdata collects several thousands of metrics per device.
All these metrics are collected and visualized in real-time.

> _Almost all metrics are auto-detected, without any configuration._

This is a list of what it currently monitors:

- **CPU**<br/>
  usage, interrupts, softirqs, frequency, total and per core, CPU states

- **Memory**<br/>
  RAM, swap and kernel memory usage, KSM (Kernel Samepage Merging), NUMA

- **Disks**<br/>
  per disk: I/O, operations, backlog, utilization, space, software RAID (md)

   ![sda](https://cloud.githubusercontent.com/assets/2662304/14093195/c882bbf4-f554-11e5-8863-1788d643d2c0.gif)

- **Network interfaces**<br/>
  per interface: bandwidth, packets, errors, drops

   ![dsl0](https://cloud.githubusercontent.com/assets/2662304/14093128/4d566494-f554-11e5-8ee4-5392e0ac51f0.gif)

- **IPv4 networking**<br/>
  bandwidth, packets, errors, fragments,
  tcp: connections, packets, errors, handshake,
  udp: packets, errors,
  broadcast: bandwidth, packets,
  multicast: bandwidth, packets

- **IPv6 networking**<br/>
  bandwidth, packets, errors, fragments, ECT,
  udp: packets, errors,
  udplite: packets, errors,
  broadcast: bandwidth,
  multicast: bandwidth, packets,
  icmp: messages, errors, echos, router, neighbor, MLDv2, group membership,
  break down by type

- **Linux DDoS protection**<br/>
  SYNPROXY metrics

- **fping** latencies</br>
  for any number of hosts, showing latency, packets and packet loss

   ![image](https://cloud.githubusercontent.com/assets/2662304/20464811/9517d2b4-af57-11e6-8361-f6cc57541cd7.png)

- **Processes**<br/>
  running, blocked, forks, active

- **Entropy**<br/>
  random numbers pool, using in cryptography


![qos-tc-classes](https://cloud.githubusercontent.com/assets/2662304/14093004/68966020-f553-11e5-98fe-ffee2086fafd.gif)


- **Applications**<br/>
  by grouping the process tree and reporting CPU, memory, disk reads,
  disk writes, swap, threads, pipes, sockets - per group

 ![apps](https://cloud.githubusercontent.com/assets/2662304/14093565/67c4002c-f557-11e5-86bd-0154f5135def.gif)

- **Users and User Groups resource usage**<br/>
  by summarizing the process tree per user and group,
  reporting: CPU, memory, disk reads, disk writes, swap, threads, pipes, sockets

- **Apache and lighttpd web servers**<br/>
   `mod-status` (v2.2, v2.4) and cache log statistics, for multiple servers

- **statsd**<br/>
  [netdata is a fully featured statsd server](https://github.com/firehol/netdata/wiki/statsd)

- **ceph**<br/>
  OSD usage, Pool usage, number of objects, etc.

And you can extend it, by writing plugins that collect data from any source, using any computer language.

---

## Documentation

Check the **[netdata wiki](https://github.com/firehol/netdata/wiki)**.

## License

netdata is [GPLv3+](LICENSE).

It re-distributes other open-source tools and libraries. Please check the [third party licenses](https://github.com/firehol/netdata/blob/master/LICENSE-REDISTRIBUTED.md).
