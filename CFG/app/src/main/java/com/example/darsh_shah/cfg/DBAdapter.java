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

    private static final String DB_NAME="ElderlyAppDB.sqlite";
    private static final int DB_VERSION=1;
    private static final String TABLE_POTATO="potato";

    private static final String COL_ID="id";
    private static final String COL_USER_ID="prod_id";
    private static final String COL_USER_CATEGORY="category";
    private static final String COL_USER_WEIGHT="weight";
    private static final String COL_USER_PRICE="price";
    private static final String COL_USER_CATGRPID="catgrpid";
    private static final String COL_USER_NAME="name";
    private static final String COL_USER_IMAGE="image";
    private static final String COL_USER_QTY="qty";
    private static final String CREATE_USER=String.format
            ("create table %s(%s INTEGER PRIMARY KEY AUTOINCREMENT,%s INTEGER,%s text not null,%s text,%s text,%s text,%s text, %s text,%s text );"
                    ,TABLE_POTATO,COL_ID,COL_USER_ID,COL_USER_CATEGORY,COL_USER_WEIGHT,COL_USER_PRICE,COL_USER_CATGRPID,COL_USER_NAME,COL_USER_IMAGE,COL_USER_QTY);



    class DBHelper extends SQLiteOpenHelper {

        public DBHelper(Context context) {

            super(context, DB_NAME, null, DB_VERSION);
        }

        @Override
        public void onCreate(SQLiteDatabase db) {
            db.execSQL(CREATE_USER);
        }

        @Override
        public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {

        }
    }
}
