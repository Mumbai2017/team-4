package com.example.darsh_shah.cfg;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by Darsh_Shah on 29-07-2017.
 */

public class DBAdapter {
    public DBAdapter(){}

    private SQLiteDatabase db;
    public DBAdapter(Context context){
        DBHelper helper=new DBHelper(context);
        db=helper.getWritableDatabase();
    }



    class DBHelper extends SQLiteOpenHelper {

        public DBHelper(Context context) {

            super(context, DB_NAME, null, DB_VERSION);
        }

        @Override
        public void onCreate(SQLiteDatabase db) {
            db.execSQL(CREATE_POTATO);
        }

        @Override
        public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {

        }
    }
}
