/**
 * Randomize array element order in-place.
 * Using Fisher-Yates shuffle algorithm.
 */
function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}

var cogs = (function() {
    var self = {};
    
    var IMG_DIR = '../images/pugs/';
    var tabClasses = ['tab-adoption', 'tab-pugs101', 'tab-forum', 'tab-blog'];
    
    
    self.init = function() {
        self.identifyPage();
        self.doTabHover();
        self.attachSearchHandler();
        self.populateHomepagePugPics();
    }
    /** 
     * Get 'count' number of random pug records
     */
    self.getRandomPugs = function(count) {
        var pugs = self.accessRecords('pugs');
        var maxSize = Math.min(pugs.length, count);
        return shuffleArray(self.accessRecords('pugs')).slice(0, maxSize);
    }
    
    self.doTabHover = function() {
        var $container = $('.tab-container');
        var currentClass = $container.attr('class');    
    
        var $mainTabs = $('.page-tabs ul');
        var $tabs = $('.page-tabs a');
        var $subNavContainer = $('.page-tabs-sub')
        var $subNavs = $('.sub-nav');

        var switchActive = function(newClass) {
            if(!$('body').hasClass('home') && $container.hasClass(newClass)) {
                 return;
            }
            
            $container.removeClass(tabClasses.join(' '));
            
            // Do hiding animation
            // if(newClass !== "tab-forum" && newClass !== "tab-blog") {
            //     $subNavContainer.hide("blind", 100);
            // }
            
            $subNavContainer.hide();
            $container.addClass(newClass);
            if(newClass === "tab-forum" || newClass === "tab-blog") {
                $subNavContainer.hide();
            } else if(newClass === currentClass) {
                $subNavContainer.show();
            } else {
                $subNavContainer.show("blind");
            }
        }
        
        var hovering = false;
        $($tabs).mouseenter(function(evt) {
            var $target = $(evt.target);
            if($target.parents().is($mainTabs)) {
                console.log($target);
                var targetClass = $target.attr('class');
                switchActive(targetClass);
            }
        });
        $($container).mouseleave(function(evt) {
            var $target = $(evt.target);
            console.log("Leaving");
            switchActive(currentClass);
        });
    }
    
    self.identifyPage = function() {
        var $container = $('.tab-container');
        var identity = $('body').attr('id');
        var $subNavContainer = $('.page-tabs-sub')
        console.log(identity);
        
        if(identity === "forum") {
            $container.addClass('tab-forum');
        } 
        else if(identity === "pugs101") {
            $container.addClass('tab-pugs101');
            $subNavContainer.show();
        }
        else if(identity === "adopt") {
            $container.addClass('tab-adoption');
            $subNavContainer.show();
        }
    }
    self.attachSearchHandler = function() {
        var $button = $('.pug-search-button');
        
        $button.click(function(evt) {
            evt.preventDefault();
            console.log("Clicked.");
            self.onAdoptionSearch($('.col-half')); 
        });
    }
    
    self.onAdoptionSearch = function($columns) {
        var MAX_RESULTS = 4;
        var results = self.getRandomPugs(MAX_RESULTS);  
        var clen = $columns.length;
        console.log(results);
        
        $('.pug-entry-container').remove();
        
        $.each(results, function(i, result) {
            var $col = $($columns[i % clen]);
            $col.append(self.createPugProfileUI(result));
        });
        
        $('.pug-entry-container').toggle("blind");
    }
    
    self.populateHomepagePugPics = function() {
        var $container = $('.pug-pics');
        console.log($container);
        if(!$container.length) return;
        
        var pugs = self.getRandomPugs(6);
        $.each(pugs, function(i, pug) {
            var html = $('<a />')
                .attr("href", "adopt.php")
                .append($('<img />')
                    .attr("src", pug.img_path)
                    .attr("alt", pug.name));
            $container.append(html)
        });
    }
    
    self.initRandomPugPics = function() {
        
    }
    
    self.createPugProfileUI = function(record) {
        var orgId = record.organization_id;
        var org = self.accessRecords("organizations", { id: orgId });
        
        var html = $('<div />').addClass('pug-entry-container')
            .append($('<div />')
                .addClass("pug-entry")
                .append($('<h1 />')
                    .addClass('pug-name').html(record.name))
                .append($('<div />')
                    .addClass('basic-info')
                    .append($('<span />')
                        .addClass('pug-org')
                        .html($('<span />')
                            .append(org.name)))
                    .append($('<span />')
                        .addClass('pug-location')
                        .html(org.location + ", " + org.state)))
                .append($('<img />')
                    .addClass('pug-image')
                    .attr("alt", record.name)
                    .attr("src", record.img_path))
                .append($('<div />')
                    .addClass('pug-description cf')
                    .append($('<p />')
                        .html(record.description))
                            .append($('<a />')
                                    .addClass('adopt-link')
                                    .attr("href", org.website)
                                    .html("Adopt Me"))    
                )
            );
        var expand = $('<button />')
                .addClass("expandprompt")
                .append('<span class="see-more">See More</span>')
        html.append(expand);                
                
        $(html).find('.expandprompt, .pug-image').click(function(evt) {
            //evt.preventDefault();
            var $description = html.find('.pug-description');
            if(!$description.is(':visible')) {
                expand.find('.see-more').html("See less");  
                expand.addClass('open');
            } else {
                console.log("Clicked");
                expand.find('.see-more').html("See more");  
                expand.removeClass('open');
            }
            $description.toggle("blind");            
        });      
        
        return html;
    }




    // Hardcode a "database" of pugs and orgs
    self.db = {
        pugs: [
            {
                name: "Carter",
                gender: 'male',
                organization_id: 0,
                description: "Four year old handsome male, rescued from the South LA shelter. Carter is a good boy but does have some behavior issues that will require extra care. Carter does NOT like children, so he absolutely cannot go to a home with kids, or one that has visiting children. He has had some issues with biting so an adopter needs to be extremely cautious with him.",
                img_path: IMG_DIR + "carter.jpg"
            },
            
            {
                name: "Lilly",
                gender: 'female',
                organization_id: 0,
                description: "Two year old female fawn puggle, found roaming the streets and then rescued from the South LA shelter. Little Lilly has such a shy, sweet personality and gets along with all of our other dogs. We suspect she was bred then dumped on the street, so we'd love to see her in the loving home she deserves.",
                img_path: IMG_DIR + "lilly.jpg"
            },
            
            {
                name: "Coach",
                gender: 'male',
                organization_id: 0,
                description: "Say hello to Coach. He considers himself a young senior as he is very active and barks to let the world know he is ready for adventure. Coach has dry eye and requires ointment in both eyes three times per day. He seems to know the ointment soothes his eyes as he is very cooperative. Coach would like to show you his pearly white teeth and fresh breath now that he has had a dental cleaning. Coach is enjoying his new lease on life and would love to meet his forever family soon. Contact us so we can introduce you to Coach.",
                img_path: IMG_DIR + "coach.jpg"
            },
            
            {
                name: "Gordo",
                gender: 'male',
                organization_id: 1,
                description: "Introducing Gordo! This happy boy gets along well with dogs and kids. It is hard to imagine how anyone could give him up. Gordo is a pro at using the doggie door and is completely potty trained. Gordo lives by the three S rule: Sleep, Snore and Smooch. Contact us if you are ready for a good smooch from Gordo.",
                img_path: IMG_DIR + "Gordo.jpg"
            },
            
            {
                name: "Virginia",
                gender: 'female',
                organization_id: 1,
                description: "Meet Virginia. An established senior and the most fashionable lady pug you ever did see. She's sort of a celebrity around these parts! She'll be the one walking freely around the facility wearing her pink designer sweater, leopard print bandana and sometimes even a diamond collar (when she's feeling extra fancy). She absolutely loves to give and receive attention, and will definitely let you know when she feels like she's being ignored by letting out what sounds like a pterodactyl scream (very strange but endearing). Once she establishes someone as her owner, she will be forever loyal to them. Being an older pug, she doesn't run or play anymore, but she'll follow you around everywhere at a walking pace and will always be on your side. Sometimes, you'll catch her dozing off while still sitting up (waiting for you to tuck her in). She loves her favorite human so much that she will wait by the door all day for them to come back! Virginia is neutral towards other dogs but needs a constant human presence for her to give all her love to! ",
                img_path: IMG_DIR + "virginia.jpg"
            },
            
            {
                name: "Lilo",
                gender: 'female',
                organization_id: 0,
                description: "This is Lilo.  She's a petite apricot girl and that just turned 7.  Her birthday was on Sept. 26 and she's still accepting presents. She's house-trained and knows how to use a doggie door.  She always tries to always be a good girl, but she can’t hide that she tends to be a little bossy sometimes with other female dogs.  She wouldn’t mind a home with a doggie brother though.  She have dry eye and require drops twice a day, but otherwise she is very healthy.  She is spayed, heartworm negative, up-to-date on all shots, and microchipped.",
                img_path: IMG_DIR + "lilo.jpg"
            },
            
            {
                name: "Leo",
                gender: 'male',
                organization_id: 0,
                description: "This is Leo! He’s a burly, full-bodied 7 year old boy.  He was a stray at a shelter.  At his vet check they found 8 mast cell tumors, but he was strong and had surgery to remove them.  Now, the vet has cleared him and he’s ready forhis next adventure! He love playing with other dogs and he sometimes barks because he get so excited.  Since he’s a bigger pug, he would probably do best with children over the age of four.  He’s having some refresher lessons on potty training, but he’s learning fast. He’s looking forward to meeting his new family and starting a new chapter of life!",
                img_path: IMG_DIR + "leo.jpg"
            },
            
            {
                name: "Chico",
                gender: 'male',
                organization_id: 1,
                description: "Chico is a friendly, affectionate pug 8 yr. old neutered male!  Chico is house trained.  Unfortunately his owners had to surrender him.  He has some skin allergies that are being treated with a good diet and medicated baths.  Chico only has one eye and some hyper-pigmentation on the cornea of his remaining eye (partial blindness), but he doesn’t let that get him down!  He is active and loves to be a part of the action around the house.  He would do well in a family with children and other dogs, he doesn’t get jealous and is as sweet as can be.  He loves car rides, walks and doesn’t seem to shed much.  He had to have some teeth removed, but it gives him more room to allow his tongue to give kisses!  Chico is heartworm negative and is up to date on his shots.  He also likes toys.",
                img_path: IMG_DIR + "chico.jpg"
            }
            
        ],
        
        organizations: [
            {
                name: "Happy Pug Adoptions",
                state: "CA",
                location: 'San Diego',
                website: 'http://adoptapet.com'
            },
            {
                name: "Association of Pug Fanatics",
                state: "CA",
                location: 'Carlsbad',
                website: 'http://adoptapet.com'
            }            
        ]
    }
    
    
    var accessPugDb = function(filter) {
        return self.db.pugs;
    }
    
    var accessOrgDb = function(filter) {
        if(filter.id !== undefined) {
            return self.db.organizations[filter.id];
        }
        
        return self.db.organications;
    }
    
    self.accessRecords = function(db, options) {
        if(db === "pugs") {
            return accessPugDb(options);
        } 
        else if(db === "organizations") {
            return accessOrgDb(options);
        } 
        return "DB not found.";
        
    }
        
    
    return self;    
})();

$(document).ready(function() {
    cogs.init();
});