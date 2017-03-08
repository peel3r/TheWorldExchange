<?php require_once("counter/counter.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The World Exchange - Trade, Issue, and Send Anything Anywhere in Real Time</title>
    <meta name="description" content="A global decentralized exchange where anything can be traded, issued, and sent in real time anywhere in the world.">
    <meta name="keywords" content="World Exchange, Decentralized Exchange, Ripple, XRP, Blockchain, Payments, Trading, Issuance, Remittance, Cryptocurrency">
    <script type="text/javascript" src="/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/linq.min.js"></script>
    <script type="text/javascript" src="/jquery.linq.min.js"></script>
    <script type="text/javascript" src="/js.cookie-2.1.3.min.js"></script>
    <script type="text/javascript" src="/lodash.js"></script>
    <script type="text/javascript" src="/ripple-min.js"></script>
    <script type="text/javascript" src="/jquery.kinetic.min.js"></script>
    <script type="text/javascript" src="/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="/jquery.smoothdivscroll-1.3-min.js"></script>
    <script type="text/javascript" src="/jquery-ui-1.8.23.custom.min.js"></script>
    <script type="text/javascript" src="/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="/jss.js"></script>
    <link rel="stylesheet" href="/xxxxx.css">
    <link rel="stylesheet" href="/jquery-ui.css">
    <link rel="stylesheet" href="/smoothDivScroll.css">
    <style type="text/css">
      
    </style>
</head>
<body>
<div id='container'>
  <div id='containerpadding'>
    <form id='form'>
    <div id='content'>
    <div id='topHalf'>
    
    <input type='hidden' name='submitted' value='submitted' />
    <div id='infoBar'>
    <b>Getting Started:</b> <a href='#about' onclick='document.getElementById("about").style.display="block";'>What is The World Exchange?</a>
    </div>
    <div id='navigation'>
    <span id='yourAccount' style='display:none;'>Your Account: <input id='account' type='text' readonly='readonly' value='<?php if(isset($_REQUEST['account'])) echo $_REQUEST['account']; ?>' placeholder='Enter your account address here...' /></span><span id='welcome'>Welcome, <a href='#' onclick='showLogin();'>Login or Create an Account</a></span>
    </div>
    <div id='subnavigation'>
    <table>
    <tr><td><div id='balanceLabel' style='visibility:hidden; display:none;'>Balance:</div></td><td><div id='balance' style='display:none;'></div></td></tr>
    <tr><td><div id='ordersLabel' style='visibility:hidden; display:none;'>Orders:</div></td><td><div id='orders' style='float:right;'></div></td></tr>
    <tr><td colspan='2'><div id='history' style='clear:right;'></div></td></tr>
    </table>
    </div>
    
    <div id='about'>
      <div id='closeAbout'><p><a href='#' onclick='document.getElementById("about").style.display="none";'>[ Close ]</a></p></div>
      <div style='padding-top:80px; padding-bottom:20px;'>
        <h3>What is The World Exchange?</h3>
        <h4>A free, open exchange<a href='#works' style='text-decoration:none; border:0;'>*</a> where anything can be traded, issued, and sent anywhere in real time.</h4>
        
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imagine being able to send money, credit, assets - any form of ownership or value - to anyone anywhere in the world in mere seconds.  Then imagine being able to trade or bid on those same items online with anyone else in the world.  And finally imagine being able to actually issue your <i>own</i> symbols as well to represent anything you can think of - and then let people send or trade that just as openly as they trade anything else, its value determined completely by the free market.  That's what The World Exchange is, and it does this by using the <a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>Ripple</a> protocol.</p>
          
          <h5 id='instant'><a href='#instant' style='text-decoration:none; border:0;'>Near-Instantaneous, Auditable Transactions and Settlements</a></h5>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Say goodbye to ACH, bank wires, SWIFT, T+2 settlement, and other slow 20th century financial technologies.  Money and virtually any other asset can now be sent almost instantaneously anywhere in the world, and unlike Bitcoin or other Blockchain-based technologies, you never have to deal with any currency other than the one you're using.  Everything is automatically and seamlessly converted in between without anyone ever having to see it.  Once received, the person can then just as quickly trade or convert it to any other form of value - other currencies, equity, debt - everything of value is represented the same way.  Instead of just using USD to buy a symbol XYZ, you can now directly buy XYZ with another asset ABC.  All the liquidity and conversion is done behind the scenes so that all markets for every symbol out there is essentially on one global, interconnected orderbook.  You can essentially now send and trade pure value in near real-time.  Best of all, everything is automatically recorded and auditable with no work on your end.</p>
          

          <h5 id='represent'><a href='#represent' style='text-decoration:none; border:0;'>Issue Symbols to Represent Any Form of Value or Ownership</a></h5>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Near-instant transactions are amazing but only the tip of the iceberg. You can do so much more than just send or trade quickly.  You can also create your own symbols to represent anything you can think of.  It is not just a payments or settlement protocol.  Everyone can now be their own broker, exchange, custodian, banker, accountant, auditor - the whole process of any financial institution is do-able by anyone online at the click of a mouse.  By using the <a href='#' onclick='document.getElementById("about").style.display="none"; $("#action").val("issue"); $("#symbol1").val(""); $("#symbol2").val(""); updateAction();'>Issue</a> button, you can create symbols to:</p>
          <ul>
          <li>Represent your company, its shares, or debt - aka, an IPO or ITO or bond offering.</li>
          <li>Fundraise for an idea, project, or cause - aka crowdfunding.</li>
          <li>Represent yourself for a loan - aka peer-to-peer lending or crowdsourced credit score.</li>
          <li>Show proof of transactions, receipts - aka automated audit trail, peer-to-peer notary.</li>
          <li>Offer rewards, gift cards, game currencies - anything redeemable in real world.</li>
          </ul>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And pretty much anything else you can creatively think of.  The symbol would then be openly tradable with its price determined entirely by the free market, just like with any stock, bond, rating, currency, etc.  At some point, you would either buy back the symbol you issued or offer some other form of exchange/reward to give it value.  The trust that you do that is why people would buy or accept your symbol in the real world.  It is your job to enforce and communicate that promise.  It is no different than someone buying a stock on the trust that the company makes money for its shareholders or a loan being offered on the trust that the borrower pays it back with interest.  Those that break that trust would find it difficult to find buyers or trading partners in the future, just like with anything else in the real world.  The most important part is that every transaction on the exchange is permanent and there for all to see, so no one can ever lie and get away with it.</p>
          
          <h5 id='global'><a href='#global' style='text-decoration:none; border:0;'>Global and Decentralized with No Middlemen</a></h5>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The best part is all of this can be done on the same global decentralized exchange.  Deep down, anything to do with value or money can be represented the same way.  We've broken down the walls and categories to the point any sort of value in society can be represented and exchanged in a market equally accessible to all.  You don't need to exchange money for shares or vice versa; you can directly exchange shares for other shares, commodities for loans, private equity for bonds, etc with again all the intermediary trades necessary to make it happen automatically occurring behind the scenes.  Anything can be traded, issued, and sent in real time anywhere in the world.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Most importantly, this exchange is owned by no one and is equally open to everyone on the planet, quite literally eliminating all middlemen in anything to do with transactions and exchange.  <b>The World Exchange is not really a place or even an exchange.</b>  It is a portal and interface to a global, decentralized network that is scattered all across the world.  The technology behind that network is the <a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>Ripple</a> consensus ledger protocol and is often compared to the internet; it is everywhere and controlled by no one.  The World Exchange is but a mere internet service provider connecting you to it.  Nothing is stored or run through The World Exchange itself; everything is directly between you and the decentralized network of other users.  There is no custodian, no broker, no counterparty.  As long as you save your account address and private key, your account is safe even if this site goes down.  Any software connecting to the Ripple network will allow you to access your account using the same address and private key. In fact, you can actually save this page to your desktop and access the network without anyone's servers; to test this, you can have your firewalls block theworldexchange.net once the page is downloaded and everything will run fine because the site is not actually doing anything other than offering the page for download.  Anyone can access and use the exchange directly with no one in between, and like the internet, the exchange itself is forever online, fully automated with no manual human labor or involvement.</p>
          
          
          <h5 id='started'><a href='#started' style='text-decoration:none; border:0;'>How to Get Started</a></h5>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The quickest way to get started is to create an account on the Login page or use an existing Ripple address if you have one.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Min XRP Balance</b>: After creating an account, the account requires a minimum amount of XRP to be activated.  XRP is the native currency on the Ripple network with no issuer or backer.  This initial XRP can be obtained by having existing users send you the XRP (share <a id='shareSendLink' href='?action=send&amp;symbol1=XRP' onclick='document.getElementById("about").style.display="none"; $("#action").val("send"); $("#symbol1").val("XRP"); updateAction();' target='_blank'>this link</a> with your address), <a href='#' onclick='document.getElementById("about").style.display="none"; $("#action").val("buy"); $("#symbol1").val("XRP"); $("#symbol2").val(""); updateAction();'>buying XRP</a> on the exchange itself (1 XRP is less than 1 US cent), or reaching out to communities online, such as  <a href='http://www.xrpchat.com/' target='_blank'>XRPChat</a> and Ripple's own <a href='https://forum.ripple.com/' target='_blank'>forums</a>.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Funding an Account</b>: Funding an account is conceptually the same as having someone or some institution send you a balance of XYZ symbol in exchange for real-world cash or other assets.  The idea is they'll redeem you in real-world currency if you or anyone else send the symbol-denominated balance back to them.  In the mean time, you can then use the XYZ symbol with others that accept it as a substitute for what it represents (the cash), just like with a credit card issued by a bank or a gift card from a store.  The person that offers the promise to redeem is called the Issuer or <a href='https://ripple.com/build/gateway-guide/' target='_blank'>Gateway</a> (in Ripple's official terms).  You can find existing known issuers for any symbol by typing the symbol into The World Exchange and clicking on the <b>"Backed by ..."</b> link to browse the list (or input an issuer address manually).  Currently, the easiest way to put real money in is with cryptocurrency exchanges such as <a href='https://www.gatehub.net/' target='_blank'>Gatehub</a> or <a href='https://www.kraken.com/' target='_blank'>Kraken</a>.  You would deposit real money on sites like those and purchase something tradable on Ripple; it'll often only be XRP, but once you have the XRP and send it to your own Ripple address, you can then trade it for any other symbol on the Ripple network using a site like this one.  Longer term, this should change and it should get easier to directly deposit things into your Ripple account as more institutions adopt the network.  There are already existing banks and major institutions that will actually back tradable USD and other real-world currencies on the Ripple network, but out of respect for <a href='https://www.ripple.com/' target='_blank'>Ripple Labs</a>, the creator of Ripple, we will not name them unless they do so first publicly.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Transaction Cost</b>: The technology is open and free for anyone to use, but to prevent spam and other issues, a fraction of XRP is required to execute any transaction or activity.  This is not determined by The World Exchange but by the Ripple protocol itself, which is an automated functionality not controlled by anyone.  XRP at the time of this post is worth less than a US penny, making transaction costs pretty much free and magnitudes cheaper than any other form of payment or execution.  What happens is this fraction of XRP is then burned and destroyed, meaning no one is being paid, and this is only so bad actors cannot spam orders or account creations to manipulate the system.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Sending and Receiving:</b> You must explicitly allow each symbol and issuer you want to receive before anyone can send you anything.  If you are expecting to receive anything, make sure the symbol and who backs it are in your settings on "What Others Can Send You."  Similarly before sending anything to a recipient, make sure the recipient has "Set What Others Can Send [Them]" to be able to accept the symbol you are about to send.  All of this is done, so that you do not accidentally receive symbols backed by people/companies you do not trust or know.  For convenience, all major currencies (USD, EUR, BTC, XRP...) are enabled by default so they can be sent to you unless you explicitly set the allowed amounts to a lower non-zero number.  You do not need to do this for symbols you buy, sell, or issue, only for what others send you.  The only symbol that does not require this is Ripple's native currency XRP.</p>
          
          <h5 id='works'><a href='#works' style='text-decoration:none; border:0;'>How Does It Work / What's the Catch?</a><br /><span style='font-size:smaller; font-weight:normal;'>* and disclaimers, technicalities/legalities, etc...</span></h5>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For the tech savy, The World Exchange is essentially a cold wallet, a fully client-side tool that connects you directly with the <a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>Ripple</a> network.  This is the most secure way to interact with Blockchain / Ledger networks by sheer design.  Most exchange services turn themselves into a central point of failure by collecting user information which they must then secure.  <b>Our site is completely pass through and is an exchange in name only.  Nothing passes through our servers, and nothing is stored or done by us.</b>  You can test this yourself by saving the page and running it without actually coming to this site or by blocking theworldexchange.net on your firewall and seeing the page still work.  The site quite literally is just a direct user interface provided as-is and free of charge for you to use the <a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>Ripple</a> network.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The underlying technology behind the scenes is the <a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>Ripple</a> consensus ledger designed to allow two parties to transmit between each other with no intermediary.  It is similar to Bitcoin's Blockchain technology except that it not only facilitates quick transactions with no middlemen, it also allows anyone to issue new symbols to represent value.  Whereas other cryptocurrencies are just that, currencies to be traded, Ripple is actually a decentralized exchange through which anything can be traded.  You can even trade other cryptocurrencies through Ripple itself.  Like Bitcoin, it is decentralized and distributed worldwide, meaning that there is no one who can interfere with your use and no one else is responsible for anything that happens except you.</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>Ripple</a> is actually a mature and well established technology in industry that's been online since 2013.  <a href='https://www.ripple.com/' target='_blank'>Ripple Labs</a>, the company which created the technology, has already implemented the technology in many major U.S. banks.  The Ripple network itself is just sitting there on the internet with no barrier to entry or cost for anyone to connect to and use.  The reason the technology is little known publicly and that no one else has created a similar free, open portal to the network is for a number of reasons:</p>
          <ul>
          <li><b><a href='https://www.ripple.com/' target='_blank'>Ripple Labs</a> has pivoted to applying their technology just to bank transactions.</b>  That is but a sliver of what their technology is capable of, but as a company with many investors and private interests, they had to focus their use case.  As a result of their financial industry focus, they had to retreat from being too public with their work.  This combined with the stigma of the company having "sold out to banks" is why Ripple is less known today than it was in 2013 when it first started.</li>
          <li><b>There is no business case for making something that is essentially free.</b>  The World Exchange is a pure, vanilla, client-side tool for the Ripple network and charges nothing to use.  There is no extra process in between you and the network and no way for the creators of the website to profit.  No VC would ever fund a free-to-use platform with no way to make money.  So why did <a href='https://www.autodidactic.ai/' target='_blank'>Autodidactic I</a> create it then? Autodidactic I is essentially an inventors/artists guild of individuals who have already created other ways to fund their own projects with no outside backers or interests. As a result, this and many other projects by Autodidactic I tend to be profit-less in nature and done purely out of interest or just to see if it's possible.</li>
          </ul>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Things that are free and open are very rare, and it is a natural human response to be skeptical.  The nice part is because it's free and open, you don't need to speculate.  Just go ahead and create an account to try things out with.  Do something with it or do nothing.  It is up to you.  The technology, however, is here and open to all.</p>
          
          <h5 id='reading'><a href='#reading' style='text-decoration:none; border:0;'>Further Reading and Learning</a></h5>
          <ul>
          <li><a href='https://www.pftq.com/blabberbox/?page=The_True_Potential_of_Ripple_and_XRP' target='_blank'>The True Potential of Ripple and XRP</a> - The original vision and inspiration for the site.</li>
          <li><a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>The Ripple Protocol</a> - History and details of the Ripple technology itself.</li>
          <li><a href='http://www.xrpchat.com/' target='_blank'>XRPChat</a>, <a href='https://forum.ripple.com/' target='_blank'>Ripple Official Forums</a> - Community sites for help and support.</li>
          <li><a href='https://www.autodidactic.ai/' target='_blank'>Autodidactic I</a> - The creators of The World Exchange.</li>
          </ul>
          <p>&nbsp;</p>
          <p style='text-align:right;'><a href='#' onclick='document.getElementById("about").style.display="none";'>[ Back to The World Exchange ]</a></p>
      </div>
    </div>
    
    <div id='loginBackground' style='display:none;'>
    </div>
    <div id='login' class='popup' style='display:none;'>
      <div id='loginContents'>
        <h3>Login to Your Ripple Account</h3>
        <div class='settings'>
        <table>
        <tr><td style='text-align:left;'>Your Account Address:</td><td style='text-align:right;' class='right'><input id='accountInput' type='text' value='<?php if(isset($_REQUEST['account'])) echo $_REQUEST['account']; ?>' placeholder='Enter account address...' onclick="this.select();" /></td></tr>
        <tr><td style='text-align:left;'>Your Private Key:</td><td style='text-align:right;' class='right'><input id='keyInput' type='text' value='<?php if(isset($_REQUEST['account'])) echo $_REQUEST['account']; ?>' placeholder='Enter private key...' autocomplete='off' onclick="this.select();" /></td></tr>
        </table>
        </div>
        <div><input id='loginSubmit' name='loginSubmit' type='submit' value='Login' /><input id='cancelLogin' name='cancelLogin' type='submit' value='Cancel' /><input id='logoutSubmit' name='logoutSubmit' type='submit' value='Logout' /></div>
        <div> - or - </div>
        <div id='newAccountField'><input id='newAccountSubmit' name='newAccountSubmit' type='submit' value='Create New Account' /></div>
        <div id='loginDisclaimer' class='disclaimer'><b>Important/Disclaimer:</b> SAVE your address and private key!  Share the address to send/receive, but NEVER share your private key with anyone.  This site does not process or save any information and is not responsible for your account or your transactions; everything goes directly between you and the global decentralized <a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>Ripple</a> network, which no one controls.  Think of us like the internet provider connecting you to the internet.  You exchange directly with others.  Nothing flows through the site itself.  The site is an exchange in name only.  There is no middleman, and we are not responsible for your actions or consequences.  The site is provided as is, and you agree by using this site that you cannot hold The World Exchange and its creators responsible or liable for anything in relation to it.  For the tech savy, the site is a free, purely client-side tool for <a href='http://bitcoin.stackexchange.com/questions/30773/how-can-an-online-wallet-be-more-secure-than-paper-wallets-or-cold-storages' target='_blank'>cold wallets</a>, the most secure way to access Blockchain and ILP, and falls under <a href='http://www.coindesk.com/fincen-rules-commodity-backed-token-services-are-money-transmitters/' target='_blank'>FinCEN exemptions</a> as all transactions happen directly between you and who you're exchanging with.  If you save this webpage, you can continue to access the <a href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)' target='_blank'>Ripple</a> network even if our servers go down because everything runs from your device directly; to test this, you can have your firewalls block theworldexchange.net once the page is downloaded and everything will run fine because the site is not actually doing anything other than offering the page for download.</div>
        <div id='disclaimerAgreement'><input type='checkbox' name='disclaimerRead' id='disclaimerRead' /> I have read and understand the above.</div>
      </div>
    </div>
    
    <div id='backer' class='popup' style='display:none;'>
      <div id='backerContents'>
        <h3>Choose the Issuer/Backer for <span id='symbolToBeBacked'> </span>...</h3>
        <div class='settings'>
        <table>
        <tr><td style='text-align:left;'>Choose from Known Issuers:</td><td style='text-align:right;' class='right'><select id='issuerList'><option value=''>-- None --</option></select></td></tr>
        <tr><td style='text-align:left;'>Or Enter Issuer's Address:</td><td style='text-align:right;' class='right'><input id='issuerInput' type='text' value='' placeholder='Enter issuer address...' onclick="this.select();" /></td></tr>
        </table>
        </div>
        <div><input id='backerSubmit1' name='backerSubmit1' type='submit' value='Submit' /><input id='backerSubmit2' name='backerSubmit2' type='submit' value='Submit' /><input id='cancelBacker' name='cancelBacker' type='submit' value='Cancel' /></div>
        <div id='issuerInfo' class='disclaimer'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Every symbol traded is issued/created by someone else out there, whether it be a person issuing symbols to represent personal loans/debt and credit or a company issuing symbols to represent their bonds and equity.  Or it could represent something completely different and unheard of - such as new currencies or tokens to represent ideas, projects, anything.  It is being able to fundraise for anything and create a fully tradable symbol to represent it.
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anyone can create your own symbols by issuing them; it's on you to communicate to the world what the symbols represent and to enforce that.  Think of it like creating a credit card; it's not cash but the creator of the card enforces the value.  In the case of peer-to-peer lending, one can create a symbol for others to buy with the creator's promise to buy back the symbol later, just like the concept of getting a loan and paying it back later.  The value of a symbol here will always be determined by how much everyone trusts the creator to back it, just like how anything else works in the real world.
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once you create your own symbol, you can then tell others to buy or sell it by directing them to this site and giving them the name of the symbol and your account address as the backer/issuer.  Your symbol will be traded just like any other symbol that exists on the exchange with its value determined completely by the free market.</div>
      </div>
    </div>
    
    <div id='trustlines' class='popup' style='display:none;'>
      <div id='trustlinesContents'>
        <h3>What Others Can Can Send You...</h3>
        <div id='trustlinesBox' class='settings'>
        <table id='trustlinesTable'>
        <tr><td class='trustSymbol'>Symbol</td><td class='trustIssuer'>Issuer</td><td class='trustLimit'>Limit</td><td class='trustDelete'> </td></tr>
        </table>
        </div>
        <div><input id='submitNewTrust' name='submitNewTrust' type='submit' value='Add New Row' /></div>
        <br />
        <div><input id='submitTrust' name='submitTrust' type='submit' value='Submit' /><input id='cancelTrust' name='cancelTrust' type='submit' value='Cancel' /></div>
        <div id='trustlinesInfo' class='disclaimer'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Every symbol is issued and created by some individual, company, or organization.  Every user has the choice to decide what others are allowed to send to him/her.  Before sending anything to a recipient, make sure the recipient has "Set What Others Can Send [Them]" to be able to accept the symbol you are about to send.  If you are expecting to receive anything, make sure the symbol and who backs it are in your settings on "What Others Can Send You."  All of this is done, so that you do not accidentally receive symbols backed by people/companies you do not trust or know.  For convenience, all major currencies (USD, EUR, BTC, XRP...) are enabled by default so they can be sent to you unless you explicitly set the allowed amounts to a lower non-zero number.  You do not need to do this for symbols you buy, sell, or issue, only for what others send you.  The only symbol that does not require this is Ripple's native currency XRP.</div>
      </div>
    </div>
    
    <div id='popup' class='popup' style='display:none;'>
      <div id='popupContents'>
        <h3 id='popupHeader'>Info</h3>
        <div id='popupText' class='info'></div>
        <div><input id='okPopup' name='okPopup' type='submit' value='Okay' /></div>
      </div>
    </div>
    
    <div id='header'>
    <h1>The World Exchange</h1>
    
    <h2>Trade, Issue, and Send Anything Anywhere in Real Time</h2>
    
    <div id='scrollingText'>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Buy and Sell Anything</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Issue Your Own Symbols</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Send Money to Anyone</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Crowdfund Any Project</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Peer-to-Peer Lending</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Crowdsourced Credit Rating</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Fundraise for Any Company</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Issue Debt or IPO / ITO</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Automate Your Audit Trail</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Offer Your Own Gift Cards</a></p>
      <p><a href='#represent' onclick='document.getElementById("about").style.display="block";'>Create Your Own Currency</a></p>
    </div>
        
    </div>
    
    </div>

        
        <div id='trade'>
          <div style='width:100%;'>
          <select id='action' name='action'>
            <option value='buy' <?php if(isset($_REQUEST['action'])&& $_REQUEST['action']=='buy') echo "selected='selected'"; ?>>Buy</option>
            <option value='sell' <?php if(isset($_REQUEST['action'])&& $_REQUEST['action']=='sell') echo "selected='selected'"; ?>>Sell</option>
            <option value='issue' <?php if(isset($_REQUEST['action'])&& $_REQUEST['action']=='issue') echo "selected='selected'"; ?>>Issue</option>
            <option value='send' <?php if(isset($_REQUEST['action'])&& $_REQUEST['action']=='send') echo "selected='selected'"; ?>>Send</option>
          </select>
          <input type='number' min='0' step="0.00000001" class='qty' id='qty1' name='qty1' value='<?php if(isset($_REQUEST['qty1'])) echo $_REQUEST['qty1']; ?>' placeholder='Qty' />
          <input type='text' class='symbol' id='symbol1' name='symbol1' value='<?php if(isset($_REQUEST['symbol1'])) echo $_REQUEST['symbol1']; else echo "BTC"; ?>' placeholder='Symbol' onclick="this.select();" />
          
          <span id='counterparty'>
            @
            <input type='number' min='0' step="0.00000001" class='qty' id='price' name='price' value='<?php if(isset($_REQUEST['price'])) echo $_REQUEST['price']; ?>' placeholder='Price' />
            <input type='text' class='symbol' id='symbol2' name='symbol2' value='<?php if(isset($_REQUEST['symbol2'])) echo $_REQUEST['symbol2']; else echo "USD"; ?>' placeholder='Symbol' onclick="this.select();" />
            
          </span>
          <span id='recipientField' style='display:none;'>
            to
            <input type='text' class='recipient' id='recipient' name='recipient' value='<?php if(isset($_REQUEST['recipient'])) echo $_REQUEST['recipient']; ?>' placeholder='Recipient Address' onclick="this.select();" />
          </span>
          <input type='submit' id='submit' name='submit' value='Submit' />
          </div>
          <div style='width:100%;'>
              <div class='issuerLabels' id='issuer1Label' style='width:49%; float:left; text-align:right; visibility:hidden; margin:auto;'>
                Backed by <span id='issuer1'> </span>
              </div>
              <div class='issuerLabels' id='issuer2Label' style='width:50%; text-align:right; visibility:hidden; margin-left:auto;'>
                <div id='issuer2Width' style='width:30%; text-align:right;'>
                <div style='padding-right:5%;'>
                Backed by <span id='issuer2'> </span>
                </div>
                </div>
              </div>
          </div>
        </div>
        <div id='errors'> </div>
        <div id='orderbook'>
        
        </div>
     </div>
      <div id='footer'>
      <br />© 2016 <a href='/'>The World Exchange</a> | <a target='_blank' href='mailto:contact@theworldexchange.net'>Contact@TheWorldExchange.Net</a> | Follow: <a target='_blank' href='https://twitter.com/WorldExchangeX'>@WorldExchangeX</a>
      <br />Created by <a href='https://www.autodidactic.ai/' target='_blank'>Autodidactic I</a>
      <br />Powered by <a target='_blank' href='https://en.wikipedia.org/wiki/Ripple_(payment_protocol)'>Ripple</a>
      </div>
      
      
    </form>
    </div>
    </div>

</body>
</html>