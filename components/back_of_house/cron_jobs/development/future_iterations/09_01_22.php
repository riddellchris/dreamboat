So there must be a table here somehwere and by that I mean a database table or perhaps even a file that has the full list of cron jobs and the timiing with which they must be run.

The cron job file should ultimately be editable based on a very quick look:
https://stackoverflow.com/questions/4421020/use-php-to-create-edit-and-delete-crontab-jobs

SO this probably leads tothe ultimate solution ending up in quite a flexible solution.

that said
the only way to really do this right now is to 
fix some times for the cron jobs and set that up.

the biggest issue is more that in time these cron jobs will really start to load up the system especially in the early hours of the morning when all the API updates and calculations are running.
Quite clearly there is an entire system of diagnostics that are required in order to manage these as the blow up in size, data intake and then calculations.
In time, I am sure that this entire system will run at all hours of the day and night frankly, that's going to be nothing short of astnoishing and a machine in an of itself, let's be honest the ultimate underlying solution to all of this.
It's going to be incredibly large frankly isn't it, layers of servers ontop of servers, ontop of servers as well.

ultimately this is what the solution is 
something about this seems to tell me that the solution here is to render all of this "work" in /components/optimisation_engine/ as not exactly redundant but slightly inaccurate in that the optimisation engine is really pretty well i mean everything here is part of that
I guess it's fine but the problem is that there will be solutions that work at night and those that work in real time I guess 
Perhaps it is the instantanoues optimisation engine and the contniuosu improbement processes or something like that
because/ where the instantanoues optimisation is almost equivalent to the retail platform and processes that both the users AND pilots can engage with 
where the continous improbement processes are where the hardcore STEM work is completed and built for lack of a better adjective

So what is really required here is probably to be built in numerous ways.

First and foremost we must track somehow if each cronjob has been completed successfully.
This in the first instance will require definitions of what each cron job requires / how it defines being completed successfully.

    FURTHER TO that this means that instrinsically we must create these definitions for each cron job 
    //probably the smartest way to achieve this is by defining the conditions for success at the top of each page/file
    //obviously that will be a set of diagnostics and the storage of those become critical in a table in the end.
    //this might be best done with a MongoDB cron job which would be of assistance
    //but most importantly these things are OK now and there is some sort of plan here that can be built in the coming weeks as this becomes more and more urgeny.
    //I think that this is most challenging when we have multiple cron jobs that start to overlap.
    //for example the cron job that currently starts at 12:01am takes so long to run that it is still running at 1:00am 
        //so managing the load on the system will become more than critical here/in this circumstance.
        //I guess this is when the BUILD TRIGGER: occurs
        //when those times are so large and the system becomes so complex that far more management is required.

        //i'm not sure what or when that is but somehow we need to manage and assess this.
        //perhaps it's prior to turning back on all the additional cron jobs that have currently been turned off with the 999 entries in the cron table 
        //but I ssupect they are simply just not critical today 
        //nor are really any of the other cron jobs that aren't extracting data today either.
        


