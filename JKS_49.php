<?php
/**
// JKS_49 - Java KeyStore - Component Certificates
 * Recompile new Internal JKS from External Archives
 * Building data structure stud from info dumps,
 * Pardon lorem ipsum.
 * ~J/270119
 */

$Vaults = [
    // "EXAMPLE" => ["cve", "ms", "acronym", "related", "hash", "vt"],
    "ANALIZA" => ["alexa", "caimeo", "cortana", "eliza", "siri"],
    "ARCHITOUCH" => ["SMB reconnaissance operation"],
    "DOUBLEPULSAR" =>["backdoor", "implant"],
    "EDUCATEDSCHOLAR" => ["MS09-050"],
    "EMERALDTHREAD" => ["MS10-061"],
    "ETERNALBLUE" => ["MS17-010", "CVE-2017-0144", "autoblue"],
    "ETERNALCHAMPION" => ["CVE-2017-0146", "CVE-2017-0147"],
    "ETERNALROCKS" => ["SMB Toolkit", "need"],
    "ETERNALROMANCE" => ["SMBv1 exploit", "n0b0dy"],
    "ETERNALSYNERGY" => ["SMBv3 exploit", "stepchild"],
    "ESKIMOROLL" =>["MS14-068"],
    "EXTRABACON" => ["SNMP exploit against Ciscos ASA software"],
    "HIVE" => ["covert server"],
    "SHELL" => ["b374k", "c99", "excalibur", "WSO"],
    "SMBTOUCH" => ["SMB reconnaissance operations"],
    "QUARKMATTER" => ["Apple Bootkit"],
    "VSEP" => ["exploit Vehicle Control Systems", "exploit QNX"]
];

/*
 *
"The Things in the Internet of Things"

// dumping codenames

* ARCHITOUCH - SMB reconnaissance operations
* DOUBLEPULSAR - Backdoor Implant
* ETERNALBLUE - SMBv1 exploit
* ETERNALCHAMPION - SMBv2 exploit
* ETERNALROCKS - SMB Toolkit
* ETERNALROMANCE - SMBv1 exploit
* ETERNALSYNERGY - SMBv3 exploit
* EXTRABACON - SNMP exploit against Ciscos ASA software
* SMBTOUCH - SMB reconnaissance operations

EARLYSHOVEL RedHat 7.0 - 7.1 Sendmail 8.11.x exploit
EBBISLAND (EBBSHAVE) root RCE via RPC XDR overflow in Solaris 6, 7, 8, 9 & 10 (possibly newer) both SPARC and x86.
ECHOWRECKER remote Samba 3.0.x Linux exploit.
EASYBEE appears to be an MDaemon email server vulnerability
EASYFUN EasyFun 2.2.0 Exploit for WDaemon / IIS MDaemon/WorldClient pre 9.5.6
EASYPI is an IBM Lotus Notes exploit that gets detected as Stuxnet
EWOKFRENZY is an exploit for IBM Lotus Domino 6.5.4 & 7.0.2
EXPLODINGCAN is an IIS 6.0 exploit that creates a remote backdoor
ETERNALROMANCE is a SMB1 exploit over TCP port 445 which targets XP, 2003, Vista, 7, Windows 8, 2008, 2008 R2, and gives SYSTEM privileges (MS17-010)
* EDUCATEDSCHOLAR is a SMB exploit (MS09-050)
* EMERALDTHREAD is a SMB exploit for Windows XP and Server 2003 (MS10-061)
EMPHASISMINE is a remote IMAP exploit for IBM Lotus Domino 6.6.4 to 8.5.2
ENGLISHMANSDENTIST sets Outlook Exchange WebAccess rules to trigger executable code on the client's side to send an email to other users
EPICHERO 0-day exploit (RCE) for Avaya Call Server
ERRATICGOPHER is a SMBv1 exploit targeting Windows XP and Server 2003
ETERNALSYNERGY is a SMBv3 remote code execution flaw for Windows 8 and Server 2012 SP0 (MS17-010)
ETERNALBLUE is a SMBv2 exploit for Windows 7 SP1 (MS17-010)
ETERNALCHAMPION is a SMBv1 exploit
ESKIMOROLL is a Kerberos exploit targeting 2000, 2003, 2008 and 2008 R2 domain controllers
ESTEEMAUDIT is an RDP exploit and backdoor for Windows Server 2003
ECLIPSEDWING is an RCE exploit for the Server service in Windows Server 2008 and later (MS08-067)
ETRE is an exploit for IMail 8.10 to 8.22
ETCETERABLUE is an exploit for IMail 7.04 to 8.05
FUZZBUNCH is an exploit framework, similar to MetaSploit
ODDJOB is an implant builder and C&C server that can deliver exploits for Windows 2000 and later, also not detected by any AV vendors
EXPIREDPAYCHECK IIS6 exploit
EAGERLEVER NBT/SMB exploit for Windows NT4.0, 2000, XP SP1 & SP2, 2003 SP1 & Base Release
EASYFUN WordClient / IIS6.0 exploit
ESSAYKEYNOTE
EVADEFRED

PASSFREELY utility which "Bypasses authentication for Oracle servers"
SMBTOUCH check if the target is vulnerable to samba exploits like ETERNALSYNERGY, ETERNALBLUE, ETERNALROMANCE
ERRATICGOPHERTOUCH Check if the target is running some RPC
IISTOUCH check if the running IIS version is vulnerable
RPCOUTCH get info about windows via RPC
DOPU used to connect to machines exploited by ETERNALCHAMPIONS
NAMEDPIPETOUCH Utility to test for a predefined list of named pipes, mostly AV detection. User can add checks for custom named pipes.

* ARCHITOUCH

CHERRYBLOSSOM
    FlyTrap - beacon (compromised firmware) that runs on compromised device
    CherryTree - command and control server where FlyTrap devices report
    CherryWeb - web-based admin panel running on CherryTree
    Mission - a set of tasks sent by the C&C server to infected devices

CRUCIBLE – automated exploit identification tool

* DOUBLEPULSAR-

* HIVE -

ELSA - Geolocates wi - fi enabled systems

* EXTRABACON - a Simple Network Management Protocol exploit against Ciscos ASA software

* QUARKMATTER – Boot level rootkit implant for Apple computers

Weeping Angel - an exploit that targets Samsung smart TVs by placing the internet - connected appliance in a “Fake Off” mode that makes the television appear to be turned off while it covertly sends audio recordings from the room to the CIA .

Brutal Kangaroo - infiltrate computers that run Windows by infecting parts of the disk drive . Similar programs described include efforts to hide malware in . jpg and .png image files .

Fine Dining - collect data . , the operator can simultaneously run a program to infiltrate it.

Cutthroat - and Swindle are part of the CIA’s multiplatform Hive “malware suite” that targets Windows, Linux and Solaris operating systems and MikroTik internet routers and helps establish communication with the infected systems, according to the released documents .

HammerDrill - is described as a program that compromises Windows operating systems by infiltrating software from CDs and DVDs and logs when discs are inserted into the machine .

HarpyEagle appears to be a CIA program focused on finding ways of accessing the file systems of Apple AirPort Extreme and AirPort Time Capsule routers, according to one of the leaked documents .

Pterodactyl – A “custom hardware solution to support media copying”; it uses small single-board computers like Raspberry Pi to copy data from an asset computer
SparrowHawk – Keylogger intended for use across multiple architectures and Unix-based platforms
DerStarke – Boot-level rootkit implant for Apple computers
GyrFalcon – Tracks the client of an OpenSSH connection and collects password, username and connection data
SnowyOwl – Uses OpenSSH session to inject code to target asset
HarpyEagle – Hardware-specific tool to gain root access to Apple’s Airport Extreme and Time Capsule
BaldEagle – An exploit for Unix systems’ Hardware Abstraction Layer
MaddeningWhispers – Remote access to devices compromised with the Vanguard exploit
DerStarke
YarnBall


Bee Sting -  tool for injecting data in to iFrame media
Remote Development Branch (RDB)
UMBRAGE
Operational Support Branch (OSB)
Flash Bang
Fight Club/RickyBobby
Taxman
Improvise
HammerDrill v2.0
Automated Implant Branch (AIB)
Assassin
Frog Prince
Grasshopper
Network Devices Branch (NDB)
JQJSTEPCHILD

JQJSTEPCHILD - was a project to discretely exploit and take over Cisco 2911 routers.
Cinnamon - test of the Cisco 881.
JQJTHRESHER - Cisco Catalyst 2960S exploits used in .

Perseus - to exploit vulnerabilities in MikroTik's Hotspot, Paywall networking and routers

Products affected (and the tools used) in Year Zero:

Airport Extreme (HarpyEagle)
iPad (DRBOOM, McNugget)
iPhone (DRBOOM, McNugget)
Mac OSX (DerStarke, SnowyOwl)
Time Capsule (HarpyEagle)
Products affected (and the tools used) in Dark Matter:

MacBook Air / MacBook Pro (Sonic Screwdriver, DarkSeaSkies)
Thunderbolt-to-Ethernet adapter (Sonic Screwdriver)
Mac OSX (DarkSeaSkies)
iPhone (NightSkies)


EDG = Engineering Development Group - group making tools for COG; based on the 8th and 9th floors of DD2
AED = Applied Engineering Division - part of EDG
MDB = Mobile Development Branch - iOS and Android team working in the cage; part of AED

Adderall = tool to pull IPSW files and kernel cache from devices
Angerquake = Mission Control for Android
Aquarius = contract for creating an implant
CrunchyLimeSkies = close access tool to install (persistent or not) an executable onto a device.
nsinstaller is the main project
dyld-js = JavaScript code to load dylibs and other binaries; needs exploits that give it memory access and ability to call native functions
Dyonedo = generates a dylinker/executable pair to defeat code signing and launch a payload
Earth = array.sort vulnerability in JavaScript (pre iOS9)
used by mcp_earth and elderwaldorf projects
ElderPiggy = privilege escalation
Grist = JavaScript bootstrapper that can be run with jsc
HAMR (pronounced hammer) = throwing framework for browser exploits contracting effort with QUAFFLE run by ESD and based on MissionControl to throw against OSX, Linux, and mobile devices (basically anything except Windows)
existing EDG throwing framework was Windows based and did not work well with these platforms
jit-thunk = JavaScript code to make calls to native functions using JIT memory and memory access exploits; implements the native_call interface; made for use by Grist to persist on device
js-util = JavaScript utilities including the testing framework, DataView, and additional String and ArrayBuffer methods
jsc-util = generic JavaScript utilities related to the JavaScript Core; includes memory access functions and configuration for specific iOS versions including structure offsets and sizes
Juggernaut = project of exploits used by the Grist framework
Mcnugget = Mission Control for iOSmcp_adam_ios = mission control plug-in to determine whether 32 or 64 bit
mcp_earth = mission control plug-in for Earth exploit (see Earth)
mcp_eve = mission control plug-in to do initial exploitation for code execution mcp_safari_ua_ios = mission control plug-in to parse user agent
mcp_sol = mission control plug-in to send stage 1 loader (installer) to devices
MOP = Mach-O Parser - Python project to parse Mach-O files (soon to be called Apple Binary Parser (ABP) and maintained by HONEYDEW)
Nandao = privilege escalation (privesc) and sandbox escape for iOS7 and iOS8
NightSkies = beacon/implant tool (maintained by AQUARIUS based on the MDB created tool of the same name)
NightVision = utility to read kernel memory and get/put files as .tbz
Quaffle = support contract for the Hammer throwing framework
Redux = close access tool for reading/writing executing files/memory via vpnagent. Should work on iOS up to 8.1.1.
rop-thunk = JavaScript code to make calls to native functions using ROP; implements the native_call interface; meant for remote browser exploits
Xiphos = privilege escalation (privesc) for iOS7, needs to be paired with a sandbox escape when run from remote.

IPSW = iPhone/iPad Software - firmware for the devices
MDF = Mobile Development Framework - public tool providing Python bindings
jsc = JavaScript Console - JavaScript interpreter on iDevices. Used for persistence by the Grist program. Located at /System/Library/Frameworks/JavaScriptCore.framework/Resources/jsc. Not really used by Apple any more and may be removed in a future release.

DevLAN = classified development network used by MDB and others
ZooLAN = old unclassified network; this is why you will occasionally see "zoo" or people with animal names
JQJ* = tag given to names of operations
pyzzle = Python executable zip file

Asset-assisted Data Exfiltration	Pterodactyl - Custom hardware solution to support media copying
Custom Unix-based Implants	Hive - Custom implant supporting network redirection through operational infrastructure
Custom Unix-based Capabilities
Gyrfalcon - Ptraces an OpenSSH client collecting username, password, TCP/IP connections, and session data

SnowyOwl - Inject code into OpenSSH client process creating surreptitious sub-channel to remote target

Sparrowhawk - Software tool to support keystroke logging

Bee Sting - Proxy with iFrame injection - HTTP proxy with man-in-the-middle iFrame injection using TCP sockets in C.

Custom Embedded System Implants
MaddeningWhispers - Software components that provide beaconing and remote access to a Vanguard device

sontaran - VOIP

YarnBall - Covert USB storage

Weeping Angel (Extending) Engineering Notes - Samsung F Series (2013 Model) SmartTV Implant

HarpyEagle - Apple Airport Extreme and Time Capsule Implant

Hardware-based Persistence
DerStarke - Apple EFI/UEFI Boot Implant

QuarkMatter - Apple EFI/UEFI Boot Implant

Local User-to-Root Exploit	BaldEagle - Exploits a vulnerability within the Hardware Abstraction Layer (HAL) daemon
Mesh Networking	SOLDER- DS&T Exploration Fund (EF 1617), A Mesh Networking Development Proposal - DS&T Exploration Fund 2016 (EF1617), A Mesh Networking Development Proposal
Automated Exploit Idenfication	CRUCIBLE - DS&T Exploration Fund 2016

CRUCIBLE
SOLDER- DS&T Exploration Fund (EF 1617), A Mesh Networking Development Proposal
SnowyOwl
QuarkMatter
HarpyEagle
Weeping Angel (Extending) Engineering Notes
Bee Sting - Proxy with iFrame injection
MaddeningWhispers
BaldEagle
Gyrfalcon
GreenPacket
Hive
YarnBall
DerStarke
Pterodactyl
sontaran
Sparrowhawk

Pterodactyl – A “custom hardware solution to support media copying”; it uses small single-board computers like Raspberry Pi to copy data from an asset computer
SparrowHawk – Keylogger intended for use across multiple architectures and Unix-based platforms
DerStarke – Boot-level rootkit implant for Apple computers
GyrFalcon – Tracks the client of an OpenSSH connection and collects password, username and connection data
SnowyOwl – Uses OpenSSH session to inject code to target asset
HarpyEagle – Hardware-specific tool to gain root access to Apple’s Airport Extreme and Time Capsule
BaldEagle – An exploit for Unix systems’ Hardware Abstraction Layer
MaddeningWhispers – Remote access to devices compromised with the Vanguard exploit
CRUCIBLE – An “automated exploit identification” tool
YarnBall – Covert USB storage for deployment of payloads and storage of exfiltrated data
GreenPacket – Router implant kit
QuarkMatter – Another boot-level rootkit implant for Apple computers
Weeping Angel – Smart TV implant kit (we wrote about it separately)
Hive – Basic implant suite for Windows and Unix setups aimed at “providing an initial foothold for the deployment of other full featured tools”
Honeycomb – Server for data coming from Swindle or Blot proxy servers
CutThroat – Virtual machine system apparently for hosting proxy servers to send asset data to
Bee Sting – iFrame injection technique for HTTP connections
Sontaran – An attempt to compromise the Siemens OpenStage VoIP phone
Secret Squirrel (SQRL) – ???

Remote Development Branch
There isn’t much data on RDB; the only tool listed is for getting at secure databases, so that’s a hint.

Umbrage – This team, among other things, seems to have collected hacker tools and techniques in use around the web, and also sorted through the Hacking Team leak for useful code and documentation — helpful for development or attribution of hacks
ShoulderSurfer – Tool used to extract data from Microsoft Exchange databases

Operational Support Branch
In addition to maintaining some useful all-purpose utilities, OSB creates custom solutions for individual operations or assets, with a focus on compromising Windows machines and apps.

Time Stomper – Used to modify timestamps on files so that they match what an operation or asset requires


Munge Payload – Tool for encrypting payloads and/or modifying them to avoid detection
Magical Mutt – Appears to be a malware-style DLL injector and process monitor
Flash Bang – Hijack that breaks out of the Internet Explorer sandboxed process and then escalates privileges on the target machine
RickyBobby – Basic Windows implant comprising DLLs and scripts that sends its info to listening post server app Cal — yes, they’re Talladega Nights references
Fight Club – Set of infected VLC, WinRAR, TrueCrypt, Shamela and Microsoft Office Standalone installers that deployed RickyBobby instances, for placement on thumbdrives used in an operation
Melomy DriveIn – Hijack of a VLC DLL that launches a RickyBobby instance — unclear if it’s the one in Fight Club
Rain Maker – Compromised portable VLC player that covertly collects files from an air-gapped computer when launched from a user’s USB drive
Improvise – Set of interoperable tools used to collect and exfiltrate data from a Windows, Mac or Linux machine — with bar-themed names (Margarita, Dancefloor, Jukebox) corresponding to the OS
Basic Bit – Keylogger for Windows machines
Fine Dining – Not software exactly but apparently a menu that operatives can order from to get a custom tool for an operation — a fake PDF that launches on a Mac and scours the drive for all audio files, for instance
HammerDrill – CD/DVD monitoring tool that also allows files to be compromised as they’re being written to a disc
Taxman – ???
HyenasHurdle – ???

Automated Implant Branch
AIB seems to concern itself with self-running implants. Many of these are not documented or described, but have file lists that reveal a little about their purpose.

Frog Prince – Fully integrated implant system inclusive of command and control, listening post and implant software
Grasshopper – Highly configurable tool used to place various implants on Windows machines (Cricket is a relative)
Caterpillar – Tool for preparing files acquired from a system for secure transport
AntHill – Appears to be a file management component for installed implants
The Gibson – Appears to be a component of command and control servers and listening posts.
Galleon – Set of nautically themed scripts and tools for securely copying files to a target computer
Assassin – ???
HercBeetle – ???
CandyMountain – ???
Hornet – ???
Cascade – ???
MagicVikings – ???

Network Devices Branch

This branch is all about routers and switches, from industrial-level gear to home devices, all of which require device or class-specific exploits and kits.
The leaks largely consist of highly technical test results and developer instructions that only hint at the software’s capabilities.

Cannoli – Implant for Linksys devices
WAG200G – Implant installer for Linksys routers that works alongside Cannoli
Slasher – Appears to be a port monitor
Cinnamon – Implant for Cisco routers
Earl Grey – Another implant possibly for Cisco routers
Aquaman – Implant for Linux-based systems, possibly routers (HGs or home gateways) in particular
Bumble – Implant for HP routers
Perseus – Appears to be an implant for routers using PowerPC architecture
Panda Poke – A “credless” exploit (i.e. requires no login credentials) for Huawei router devices
Panda Flight – Covert tunneling tool for Huawei devices
Panda Sneeze – Unclear purpose but part of the Panda suite along with PandaMitt, PandaScore and others
ChimayRed – Exploit used against MikroTik routers running RouterOS that allows payloads to be installed on the device
Felix – Appears to be a listening post for MikroTik routers
HG – Possibly HunGrrr, general-purpose tool for accessing remote networking devices; used as a component or step in many tests and projects
BuzFuz – ???
Cytolysis – ???
Powerman – ???

Non-branch-specific Projects

AfterMidnight – Seems to be a Windows privilege escalation scheme that uses one DLL to gain access for another (a “Gremlin”)
Packrat – Tool for creating and automating listening posts with open-source and commercial software
RoidRage – Implant/exploit for Android devices up to 5.X
The.Net – Network configuration tool that imitates real-world internet and intranet conditions in a set of fictional corporations (Umbrella, Abstergo, etc.)
Philosoraptor – Unclear, but “stated goal” is to demonstrate the business value of new tool suites and automated testing using a legitimate operational software product
Marble Framework – Obfuscation tool that modifies source files so they can’t be traced to developers or teams
Kraken – Appears to be an organizational tool for task management and project tracking
Fluxwire – Contractor-provided distributed/mesh network tool (with extensive documentation) used to organize connected assets, supporting 9 OSes and 6 architectures


Cocoon – ???
Tremor – ???
iOS-specific
Some tools seem to be only mobile-specific, but these are largely aimed at iOS devices.

Adderall – Tool to pull files and kernel cache from iOS devices
ElderPiggy – Privilege escalation tool
NightVision – Reads and records device’s kernel memory
Nightskies – iOS implant, installed via CrunchyLimeSkies
Mcnugget – Mission control utility for iOS implants
HAMR – Framework for “throwing” browser exploits
DRBOOM – Single-step implant installer for iOS up to 8.2
Android-specific
A number of exploits are referred to but redacted, so they’re not listed here.

AngerQuake (renamed AngerManagement) – Collection of HAMR-related plug-ins for remote exploitation of Android devices
Orion – Remote exploit for Android devices
Freedroid – Privilege escalation tool

VANGUARD - Kernel Exploit (PEKVanguard_x86x64)
INF - File Install UAC Bypass (PEUSandWorm_x86x64)
LINKEDIN - User Mode LPE (PEULinkedIn_x86x64)
LINKEDOUT - User Mode LPE (PEULinkedOut_x86x64)
CALVARY - UAC Bypass (PEUCalvary_x86x64)
ARTILLERY - UAC Bypass (PEUArtillery_x86x64)
GIRAFFE - Link Files (MISCLinkWriter_GRF)

EZCHEESE - Removable Media Link File Execution (EVRemovableMediaLink_EZC)
LACHESIS - Removable Media Link File Exploitation with Autorun.inf (EVRemovableMediaLink_LACH)
BOOMSLANG - Link File Execution Utilizing Desktop.ini (EVLink_BOOM)
RIVERJACK - Link File Execution Utilizing .library-ms (EVLink_RVRJ)

TRICKPLAY - Scheduled Task Persistence (PSEDSchedTask_TP)
HIGHCLASS - COM + Junction Folder User Persistence (PSDComJunction_HCLS)
QUICKWORK - Run and RunOnce Registry Key Persistence (PSEDRunKey_QW)
LEDGER - Group Policy Startup Script (PSEDStartupScript_LDGR)
SYSTEMUPTIME - WMI Event Persistence (PSEDWMIEvent_SU)
CONSTANTFLOW - Service Persistence (PSEDService_CF)

AFTERMIDNIGHT - After Midnight
ANGELFIRE - Angel Fire
ARCHIMEDES - Archimedes
ATHENA - Athena
BOTHANSPY -	Bothan Spy
BRUTALKANGAROO - Brutal Kangaroo
CHERRYBLOSSOM - Cherry Blossom
COUCHPOTATO - Couch Potato
DARKMATTER - Dark Matter
DUMBO -	Dumbo
ELSA - Outlaw Country
EXPRESSLANE - Express Lane
GRASSHOPPER - Grasshopper
HIGHRISE - High Rise
HIVE - Hive
IMPERIAL - Imperial
MARBLE - Marble Framework
OUTLAWCOUNTRY - Outlaw Country
PANDEMIC - Pandemic
PROTEGO - Protego
SCRIBBLES - Scribbles
RAYTHEON - UCL:Raytheon
WEEPINGANGEL - Weeping Angel

SPECKLED - Create Process And Choose A User To Run As Via The Task Scheduler (TaskSchedulerRun_SPKL)
LEOPARD - Create Process As Current User +Admin (CreateProcessAsUser_LEP)
GHARIAL - Create Process Using Temp Directory (LoadFromDisk_GHR)
TIGER - Create Process Using WMI (CreateProcessWMI_TIG)
SPADEFOOT Create Process (CreateProcess_SPF)
SHASTA - Create A Process Via COM Class Creation (COMLocalServerRun_SHTA)
GREENHORN - Create Process And Pipe The Results (CreateProcessPipe_GHRN)
CHORUS - Create Process Via ShellExecute (ShellExecute_CRS)

Payload Deployment Modules: In-Memory Dll Execution

INTRADERMAL - Load Library From Memory (LoadLibraryFromMemoryJNTD)
INTRADERMAL - Load ICE Dll In-Memory (LoadICEFromMemoryJNTD)
INTRADERMAL - Load Fire and Forget Dll In-Memory (LoadFireAndForgetFromMemoryJNTD)

INCEPTION - Inject Dll From Memory Into A Remote Process (lnjectLibraryFromMemory_NCPT)
FLYPODERMIC - Inject Fire and Forget Dll From Memory Into Remote Process (lnjectFireAndForgetFromMemory_FIYPD)
HYPODERMIC - Inject Dll From Memory Into A Remote Process (lnjectLibraryFromMemory_FIYPD)

Payload Deployment Modules: On Disk Dll Loading

CAIMAN - Load Library From Disk Using Temp Directory (LoadLibraryFromDisk_CMN)
GIRAFFE - Link Files (MISCLinkWriter_GRF)
GLYPH - Data Transfer Via Data File (DTFile_GLPH - GLYPH)
BRUTALKANGAROO - Transferring Data Using NTFS Alternate Data Streams (DTNtfsAds_BK)

Load Library From Disk - Class Name: LoadLibraryFromDisk

Load EXE From Disk - Class Name:LoadExeFromDisk

Load Library From Memory - Class Name: LoadLibraryFromMemory

Load Fire and Forget Library From Memory - Class Name: LoadFireAndForgetFromMemory

Load ICEv3 Library From Memory - Class Name: LoadICEFromMemory

Inject Library From Memory into a remote process - Class Name: InjectLibraryFromMemory

Inject Fire and Forget Library From Memory into a remote process - Class Name: InjectFireAndForgetFromMemory
*/