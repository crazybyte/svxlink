<?php
  $selected="index";
  include("header.inc");
?>

<H2>Main Screen</H2>
Welcome to the home of SvxLink. 
The SvxLink project is developing a flexible, general purpose voice services
system for ham radio use. The SvxLink Server consists of a core that handles the
connection to the transceiver. The core can be configured to act as a repeater
controller or to operate on a simplex channel. 
The voice services are loaded into the core as plugins, or modules as they are
called in SvxLink. Some examples of existing voice services are: Help - a help
system, Parrot - a module that plays back everything you say, EchoLink - connect
to other EchoLink stations and TclVoiceMail - a simple voice mail system.
Have a look at the <A href="featurelist.php">feature list</A> to get a quick
overview of what the SvxLink project is all about.
<P/>
The project also includes an EchoLink client GUI application (Qtel).
Qtel is only an EchoLink client program. It does not have the
sysop mode. That is, it cannot be connected to a transceiver
and act as a link. For the latter, use the SvxLink Server.
<P/>
EchoLink is an amateur radio invention (well actually it is just a
modified verison of IP telephony) to link radio transceivers together
over the Internet. You must have an amateur radio license to use
it. The original EchoLink software can be found at
<A href="http://www.echolink.org/">http://www.echolink.org/</A>. However,
this software only support the Windows operating system and it is
closed source. SvxLink is released under the GPL license. 
<P/>
SvxLink is developed under Fedora but it's possible to get it working on other
distributions as well. However, since SvxLink is a part of the official Fedora
distribution it's easier to install it there.
<P/>

<?php include("footer.inc"); ?>
